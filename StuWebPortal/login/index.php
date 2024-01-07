<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
<?php

define('TITLE', "Student");
include '../assets/layouts/header.php';
check_logged_out();
?>

<style>
    .prevent-select {
        -webkit-user-select: none;
        /* Safari */
        -ms-user-select: none;
        /* IE 10 and IE 11 */
        user-select: none;
        /* Standard syntax */
    }

    body::-webkit-scrollbar {
        width: 8px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: grey;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        background-color: blue;
        /* color of the scroll thumb */
        border-radius: 15px;
        /* roundness of the scroll thumb */
    }

    .fs-6 {
        font-size: 1rem;
    }
</style>

<body oncontextmenu="return false" class="prevent-select">

    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <form class="form-auth" action="includes/login.inc.php" method="post" autocomplete="off">

                    <?php insert_csrf_token(); ?>

                    <div class="text-center">
                        <img class="mb-1" src="../assets/images/logo.png" alt="" width="90" height="90">
                    </div>

                    <h6 class="h3 mt-3 mb-3 font-weight-normal text-muted text-center">Login to your Account</h6>

                    <div class="text-center mb-3">
                        <small class="text-success font-weight-bold">
                            <?php
                            if (isset($_SESSION['STATUS']['loginstatus']))
                                echo $_SESSION['STATUS']['loginstatus'];

                            ?>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['nouser']))
                                echo $_SESSION['ERRORS']['nouser'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['wrongpassword']))
                                echo $_SESSION['ERRORS']['wrongpassword'];
                            ?>
                        </sub>
                    </div>

                    <div class="col-auto my-1 mb-4">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="rememberme" name="rememberme">
                            <label class="custom-control-label" for="rememberme">Remember me</label>
                        </div>
                        <small style="font-size: .8rem; color: grey;">(Note: If you don't check 'Remember Me' option, then you may timeout due to inactivity.)</small>

                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit" value="loginsubmit" name="loginsubmit">Login</button>

                    <p class="mt-3 text-muted text-center">Forgot Password? <a href="../reset-password/" style="text-decoration: none;">Reset Here</a></p>



                </form>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
    </div>
    <script>
        function password_show_hide() {
            var x = document.getElementById("password");
            var show_eye = document.getElementById("show_eye");
            var hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
    <?php

    // include '../assets/layouts/footer.php'

    ?>