<?php

session_start();

require '../../assets/includes/auth_functions.php';
require '../../assets/includes/security_functions.php';
check_logged_in_butnot_verified();

require '../../assets/setup/env.php';
require '../../assets/setup/db.inc.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../assets/vendor/PHPMailer/src/Exception.php';
require '../../assets/vendor/PHPMailer/src/PHPMailer.php';
require '../../assets/vendor/PHPMailer/src/SMTP.php';

if (isset($_POST['verifysubmit'])) {
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
        $_SESSION['STATUS']['verify'] = 'Request could not be validated';
        echo "<script>window.location.href = '../'; </script>";
        // header("Location: ../");
        exit();
    }


    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "localhost/Library/StuWebPortal/verify/includes/verify.inc.php?selector=" . $selector . "&validator=" . bin2hex($token);
    // $url = "https://library.gndpoly.org/StuWebPortal/verify/includes/verify.inc.php?selector=" . $selector . "&validator=" . bin2hex($token);
    $expires = 'DATE_ADD(NOW(), INTERVAL 1 HOUR)';

    $email = $_SESSION['email'];


    $sql = "DELETE FROM stu_auth_tokens WHERE user_email=? AND auth_type='account_verify';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        $_SESSION['ERRORS']['sqlerror'] = 'SQL ERROR';
        echo "<script>window.location.href = '../'; </script>";
        // header("Location: ../");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }


    $sql = "INSERT INTO stu_auth_tokens (user_email, auth_type, selector, token, expires_at)
            VALUES (?, 'account_verify', ?, ?, " . $expires . ");";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $_SESSION['ERRORS']['sqlerror'] = 'SQL ERROR';
        echo "<script>window.location.href = '../'; </script>";
        // header("Location: ../");
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $email, $selector, $hashedToken);
        mysqli_stmt_execute($stmt);
    }


    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    $to = $email;
    $subject = 'Verify Your Account';

    /*
    * -------------------------------------------------------------------------------
    *   Using email template
    * -------------------------------------------------------------------------------
    */

    $mail_variables = array();

    $mail_variables['APP_NAME'] = APP_NAME;
    $mail_variables['email'] = $email;
    $mail_variables['url'] = $url;

    $message = file_get_contents("./template_verificationemail.php");

    foreach ($mail_variables as $key => $value) {

        $message = str_replace('{{ ' . $key . ' }}', $value, $message);
    }


    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host = MAIL_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = MAIL_USERNAME;
        $mail->Password = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION;
        $mail->Port = MAIL_PORT;

        $mail->setFrom(MAIL_USERNAME, APP_NAME);
        $mail->addAddress($to, APP_NAME);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
    } catch (Exception $e) {
        // for public use
        $_SESSION['STATUS']['verify'] = 'Email could not be Sent, Try Again Later';

        // for development use
        // $_SESSION['STATUS']['verify'] = 'email could not be sent. ERROR: ' . $mail->ErrorInfo;

        echo "<script>window.location.href = '../'; </script>";
        //  header("Location: ../");
        exit();
    }

    $_SESSION['STATUS']['verify'] = 'Verification Email Sent';
    echo "<script>window.location.href = '../'; </script>";
    // header("Location: ../");
    exit();
} else {

    echo "<script>window.location.href = '../'; </script>";
    // header("Location: ../");
    exit();
}
