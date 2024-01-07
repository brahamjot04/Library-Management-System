<?php

session_start();

require '../../assets/includes/security_functions.php';
require '../../assets/includes/auth_functions.php';
check_logged_out();

require '../../assets/setup/env.php';
require '../../assets/setup/db.inc.php';

if (isset($_POST['resetsubmit'])) {

    /*
    * -------------------------------------------------------------------------------
    *   Securing against Header Injection
    * -------------------------------------------------------------------------------
    */

    foreach ($_POST as $key => $value) {

        $_POST[$key] = _cleaninjections(trim($value));
    }

    /*
    * -------------------------------------------------------------------------------
    *   Verifying CSRF token
    * -------------------------------------------------------------------------------
    */

    if (!verify_csrf_token()) {

        $_SESSION['STATUS']['resetsubmit'] = 'Request could not be validated';
        echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "</script>";
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }


    $selector = $_POST['selector'];
    $validator = $_POST['validator'];
    $password = $_POST['newpassword'];
    $passwordRepeat = $_POST['confirmpassword'];

    if (empty($selector) || empty($validator)) {

        $_SESSION['STATUS']['resentsend'] = 'Invalid Token, Please Use New Reset Email';
        echo "<script> window.location.href = '../'; </script>";
        // header("Location: ../");
        exit();
    }
    if (empty($password) || empty($passwordRepeat)) {

        $_SESSION['ERRORS']['passworderror'] = "Passwords can't be empty";
        echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "; </script>";
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else if ($password != $passwordRepeat) {

        $_SESSION['ERRORS']['passworderror'] = "Passwords don't match";
        echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "; </script>";
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $sql = "SELECT * FROM admin_auth_tokens WHERE auth_type='password_reset' AND selector=? AND expires_at >= NOW() LIMIT 1";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
        echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "; </script>";
        // header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {

        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt);
        $results = mysqli_stmt_get_result($stmt);

        if (!($row = mysqli_fetch_assoc($results))) {

            $_SESSION['STATUS']['resentsend'] = 'Non-existent or Expired Token, Please Use New Reset Email';
            echo "<script> window.location.href = '../'; </script>";
            // header("Location: ../");
            exit();
        } else {

            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row['token']);

            if ($tokenCheck === false) {

                $_SESSION['STATUS']['resentsend'] = 'Invalid Token, Please use New Reset Email';
                echo "<script> window.location.href = '../'; </script>";
                // header("Location: ../");
                exit();
            } else if ($tokenCheck === true) {

                $tokenEmail = $row['user_email'];

                $sql = 'SELECT * FROM admin_users WHERE email=?;';
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {

                    $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
                    echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "; </script>";
                    // header("Location: " . $_SERVER['HTTP_REFERER']);
                    exit();
                } else {

                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $results = mysqli_stmt_get_result($stmt);

                    if (!$row = mysqli_fetch_assoc($results)) {

                        $_SESSION['STATUS']['resentsend'] = 'invalid token, please use new reset email';
                        echo "<script> window.location.href = '../'; </script>";
                        // header("Location: ../");
                        exit();
                    } else {

                        $sql = 'UPDATE admin_users SET password=? WHERE email=?;';
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
                            echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "; </script>";
                            // header("Location: " . $_SERVER['HTTP_REFERER']);
                            exit();
                        } else {

                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);

                            $sql = "DELETE FROM admin_auth_tokens WHERE user_email=? AND auth_type='password_reset';";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {

                                $_SESSION['ERRORS']['scripterror'] = 'SQL ERROR';
                                echo "<script> window.location.href =" . $_SERVER['HTTP_REFERER'] . "; </script>";
                                // header("Location: " . $_SERVER['HTTP_REFERER']);
                                exit();
                            } else {

                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);

                                $_SESSION['STATUS']['loginstatus'] = 'password updated, please log in';
                                echo "<script> window.location.href = '../../login/'; </script>";
                                // header("Location: ../../login/");
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    echo "<script> window.location.href = '../'; </script>";
    // header("Location: ../");
    exit();
}
