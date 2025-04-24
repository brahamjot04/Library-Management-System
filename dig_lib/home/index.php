<?php
include 'admin/functions.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>

<head>
    <!-- Website Title Start -->
    <title>GNDPC | Digital Library</title>
    <!-- Website Title End -->

    <!-- Rel Icon Start -->
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png" />
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!-- Rel Icon End -->
</head>

<body oncontextmenu="return false">
    <?php
    include '../assets/includes/header.php';
    ?>

    <!-- ***** Animated Type Text or Gradient Area Start ***** -->
    <div class="bg-digital-gradient">
        <p class="text-slide text-white">Welcome To Digital Library</p>
    </div>
    <!-- Animated Type Text or Gradient Area End -->

    <!-- Department Block Start -->
    <div class="dept-block container border rounded-3 shadow bg-light mb-5">

        <div class="top my-4 px-4">
            <h2 class="fw-bold h-font text-center">Departments</h2>
        </div>
        <hr>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/AS.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/AP.png" alt="image" width="50px">
                            <h5 class="m-0 ms-3">Applied Science</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/AE.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/Automobile.png" alt="image" width="70px">
                            <h5 class="m-0 ms-3">Automobile Engineering</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/CSE.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center">
                            <img src="../assets/images/dept/CSE.png" alt="image" width="60px">
                            <h5 class="m-0 ms-3">Computer Engineering</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/CE.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/Civil.png" alt="image" width="50px">
                            <h5 class="m-0 ms-3">Civil Engineering</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/EE.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/EE.png" alt="image" width="40px">
                            <h5 class="m-0 ms-3">Electrical Engineering</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/ECE.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/ECE.png" alt="image" width="50px">
                            <h5 class="m-0 ms-3">Electronics Engineering</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/ME.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/ME.png" alt="image" width="50px">
                            <h5 class="m-0 ms-3">Mechanical Engineering</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/Literature.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/literature.png" alt="image" width="60px">
                            <h5 class="m-0 ms-3">Literature</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-5 px-4 ">
                <a class="text-decoration-none text-dark" href="../dept/Reference.php">
                    <div class="pop bg-white rounded shadow p-4 border-top border-4 border-dark">
                        <div class="d-flex align-items-center mb-2 ">
                            <img src="../assets/images/dept/reference.png" alt="image" width="50px">
                            <h5 class="m-0 ms-3">Other Reference</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Department Block End -->

    <!-- Footer Start -->
    <?php
    include '../assets/includes/footer.php';
    ?>
    <!-- Footer End -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>