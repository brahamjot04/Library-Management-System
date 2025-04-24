<link rel="stylesheet" href="../login/logincustom.css">
<link rel="stylesheet" href="../register/registercustom.css">
<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<?php

define('TITLE', "Signup");
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
</style>

<body oncontextmenu="return false" class="prevent-select">

    <div class="container-fluid rounded-4 shadow">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-lg-4">

                <form class="form-auth" action="includes/register.inc.php" method="post" enctype="multipart/form-data">

                    <?php insert_csrf_token(); ?>

                    <div class="picCard text-center">
                        <div class="avatar-upload">
                            <div class="avatar-preview text-center">
                                <div id="imagePreview" style="background-image: url( ../assets/uploads/users/_defaultUser.png );"></div>
                            </div>
                            <div class="avatar-edit">
                                <input name='avatar' id="avatar" class="fa-light fa-pencil" type='file' />
                                <label for="avatar"></label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['imageerror']))
                                echo $_SESSION['ERRORS']['imageerror'];

                            ?>
                        </sub>
                    </div>

                    <h6 class="h3 mt-3 mb-3 font-weight-normal text-muted text-center">Create an Account</h6>

                    <div class="text-center mb-3">
                        <small class="text-success font-weight-bold">
                            <?php
                            if (isset($_SESSION['STATUS']['signupstatus']))
                                echo $_SESSION['STATUS']['signupstatus'];

                            ?>
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="fname" class="font-weight-bold">First Name:</label>
                        <input type="text" id="first_name fname" name="first_name fname" class="form-control" placeholder="First Name" required autocomplete="off">
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['fnameerror']))
                                echo $_SESSION['ERRORS']['fnameerror'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">
                        <label for="lname" class="font-weight-bold">Last Name:</label>
                        <input type="text" id="last_name lname" name="last_name lname" class="form-control" placeholder="Last Name" required autocomplete="off">
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['lnameerror']))
                                echo $_SESSION['ERRORS']['lnameerror'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email Address:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" pattern=".+@gndpoly.org" autocomplete="off" required>
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['emailerror']))
                                echo $_SESSION['ERRORS']['emailerror'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">
                        <label for="contect" class="font-weight-bold">Contact No.</label>
                        <input type="number" id="contect" name="contect" class="form-control" placeholder="Contact No." required autocomplete="off">
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['contactrerror']))
                                echo $_SESSION['ERRORS']['contacterror'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">
                        <label for="username" class="font-weight-bold">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autocomplete="off">
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['usernameerror']))
                                echo $_SESSION['ERRORS']['usernameerror'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">
                        <label for="password" class="font-weight-bold">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>

                        <!-- Password Strength Indicator Start -->
                        <div class="d-flex flex-row align-items-center mb-4">
                            <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                            <label class="form-label font-weight-bold text-secondary mt-2 mr-2" for="typePasswordStrengthX">Password Strength:</label>
                            <span id="PassStrength" class="badge ml-1" style="margin-top: -10px;">Weak</span>
                        </div>
                        <!-- Password Strength Indicator End -->

                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['wrongpassword']))
                                echo $_SESSION['ERRORS']['wrongpassword'];
                            ?>
                        </sub>
                    </div>


                    <div class="form-group">
                        <label for="confirmpassword" class="font-weight-bold">Confirm Password:</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password" autocomplete="off" required>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" onclick="Toggle()" type="checkbox" value="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Show Password
                                </label>
                            </div>
                        </div>
                        <sub class="text-danger">
                            <?php
                            if (isset($_SESSION['ERRORS']['wrongpassword']))
                                echo $_SESSION['ERRORS']['wrongpassword'];
                            ?>
                        </sub>
                    </div>

                    <div class="form-group">

                    </div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit" name='signupsubmit'>Signup</button>

                </form>

            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>



    <?php

    include '../assets/layouts/footer.php'

    ?>

    <script>
        function Toggle() {
            var temp = document.getElementById("password");
            if (temp.type === "password") {
                temp.type = "text";
            } else {
                temp.type = "password";
            }

            var temp1 = document.getElementById("confirmpassword");
            if (temp1.type === "password") {
                temp1.type = "text";
            } else {
                temp1.type = "password";
            }
        }

        // JavaScript for Password Strength Start
        let timeout;
        let password = document.getElementById('password');
        let strengthBadge = document.getElementById('PassStrength');
        let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
        let mediumPassword = new RegExp('((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,}))|((?=.*[a-z])(?=.*[A-Z])(?=.*[^A-Za-z0-9])(?=.{8,}))');

        function StrengthChecker(PasswordParameter) {
            if (strongPassword.test(PasswordParameter)) {
                strengthBadge.style.backgroundColor = "green";
                strengthBadge.textContent = 'Strong';
            } else if (mediumPassword.test(PasswordParameter)) {
                strengthBadge.style.backgroundColor = 'blue';
                strengthBadge.textContent = 'Medium';
            } else {
                strengthBadge.style.backgroundColor = 'red';
                strengthBadge.textContent = 'Weak';
            }
        }

        password.addEventListener("input", () => {
            strengthBadge.style.display = 'block';
            clearTimeout(timeout);
            timeout = setTimeout(() => StrengthChecker(password.value), 500);
            if (password.value.length !== 0) {
                strengthBadge.style.display != 'block';
            } else {
                strengthBadge.style.display = 'none';
            }
        });
        // JavaScript for Password Strength End
    </script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })
    </script>
    <script>
        // Function to check Whether both passwords
        // is same or not.
        function checkPassword(form) {
            password = form.password.value;
            confirmPassword = form.confirmPassword.value;

            // If password not entered
            if (password == '')
                alert("Please enter Password");

            // If confirm password not entered
            else if (confirmPassword == '')
                alert("Please enter confirm password");

            // If Not same return False.
            else if (password != confirmPassword) {
                alert("\nPassword did not match: Please try again...")
                return false;
            }

            // If same return True.
            else {
                alert("Password Match: Welcome to GNDPC")
                return true;
            }
        }
    </script>