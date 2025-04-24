<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

    <?php
    // Title Start
    define('TITLE', "Membership Form");
    // Title End

    // Including Header Start
    include '../assets/layouts/header.php';
    // Header End

    // Checking Verified Start
    check_verified();
    // Checking Verified End
    ?>

    <!-- Ajax link here  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="membership.css">
    <!-- DatePicker jQuery Start -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <!-- DatePicker jQuery End -->

</head>
<?php
error_reporting(0);
if (isset($_SESSION['auth'])) {
    $email = $_SESSION['email'];
    $qry1 = "SELECT `mem_no` FROM library_membership_form WHERE `email`='$email';";
    $result2 = mysqli_query($conn, $qry1);
    $r2 = mysqli_fetch_array($result2);
    if ($r2[0] == 0) {

?>

        <body oncontextmenu="return false" class="prevent-select">


            <!-- header for membership form START here -->
            <div class="container-fluid prevent-select">
                <div class="container d-flex flex-row justify-content-center">
                    <span class="text-center my-3">
                        <img src="../assets/images/logo.png" alt="college_logo" width="140vw">
                    </span>
                    <div class="text-center mx-3 my-3">
                        <span class="fs-2 fw-semibold">GURU NANAK DEV POLYTECHNIC COLLEGE</span><br>
                        <span class="fs-6 fw-semibold">GILL PARK, GILL ROAD, LUDHIANA-141006</span><br>
                        <span class="border border-dark border-2 rounded fs-4 fw-bold px-2">LIBRARY MEMBERSHIP FORM</span><br>
                        <span class="fs-4 fw-bold">Session <script type="text/javascript">
                                var year = new Date();
                                document.write(year.getFullYear());
                            </script> - <script>
                                document.write(year.getFullYear() + 1);
                            </script></span><br>
                    </div>
                </div>
            </div>
            <!-- header for membership form END here -->

            <!-- Display Error if Data Not Stored Start -->
            <div id="formErr"></div>
            <!-- Display Error if Data Not Stored End -->

            <div class="container d-flex flex-row justify-content-center">

                <!-- Form START here -->
                <form name="membership" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select shadow" onsubmit="return Validate(event)" action="#">

                    <!-- Date Select Start -->
                    <fieldset class="form-group border pt-3 px-3 mx-3 my-4">
                        <label class="form-label fs-5 fw-semibold">Date: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100" type="date" name="current_date" value="<?php echo date('Y-m-d') ?>" readonly>
                        </div>
                    </fieldset>
                    <!-- Date Select End -->

                    <!-- Student Name Start -->
                    <fieldset class="form-group border p-3 mx-3">
                        <label class="form-label fs-5 fw-semibold">Student Name: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-uppercase" type="text" name="s_name" placeholder="Enter Your Student Name" autofocus>
                            <div class="container d-flex flex-wrap text-danger" id="sNameErr"></div>
                        </div>
                        <!-- Student Name End -->


                        <!-- Father Name Start -->
                        <label class="form-label fs-5 fw-semibold">Father Name: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-uppercase" type="text" name="f_name" placeholder="Enter Your Father Name">
                            <div class="container d-flex flex-wrap text-danger" id="fNameErr"></div>
                        </div>
                        <!-- Father Name End -->

                        <!-- Mobile No. Start -->
                        <label class="form-label fs-5 fw-semibold">Mobile No.: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-uppercase" type="number" name="mob_no" id="mobile_no" placeholder="Enter Your Mobile Number" onkeyup="lengthMobile()">
                            <div class="container d-flex flex-wrap text-danger" id="mNoErr"></div>
                            <div class="container d-flex flex-wrap text-danger" id="mNoErr2"></div>
                        </div>
                        <!-- Mobile No. End -->

                        <!-- Academic Year Start -->
                        <label class="form-label fs-5 fw-semibold">Academic Year: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-uppercase" autocomplete="off" type="number" name="academic_year" id="datepicker" placeholder="Enter Your Academic Year" value="<?php echo $year = date('Y') ?>" readonly>
                            <!-- Academic Year End -->

                            <!-- Script to implement DatePicer Library with jQuery Start -->
                            <script>
                                $(document).ready(function() {
                                    $("#datepicker").datepicker({
                                        format: "yyyy",
                                        viewMode: "years",
                                        minViewMode: "years",
                                        autoclose: true
                                    });
                                })
                                var dp = $("#datepicker").datepicker({
                                    format: "yyyy",
                                    viewMode: "years",
                                    minViewMode: "years",
                                    autoclose: true
                                });
                                //changeYear event trigger's
                                dp.on('changeYear', function(e) {
                                    //do something here
                                    // alert("Year changed ");
                                });
                            </script>
                            <!-- Script to implement DatePicer Library with jQuery End -->

                            <!-- Academic Year Error Start -->
                            <div class="container d-flex flex-wrap text-danger" id="accYearErr"></div>
                            <!-- Academic Year Error End -->

                        </div>

                        <!-- Department Dropdown Start -->
                        <label class="form-label fs-5 fw-semibold">Department: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <select class="form-select w-100 mb-1 text-uppercase" name="dept_name" aria-label="Default select any department">
                                <option value='' disabled selected>Select any Department</option>
                                <option value='CSE'>Computer Science and Engineering</option>
                                <option value='AE'>Automobile Engineering</option>
                                <option value='CE'>Civil Engineering</option>
                                <option value='ECE'>Electronics & Communication Engineering</option>
                                <option value='EE'>Electrical Engineering</option>
                                <option value='ME'>Mechanical Engineuering</option>
                                <option value='AS'>Applied Science</option>
                            </select>
                            <div class="container d-flex flex-wrap text-danger" id="deptErr"></div>
                        </div>
                        <!-- Department Dropdown End -->

                        <!-- Semester Dropdown Start -->
                        <label class="form-label fs-5 fw-semibold">Semester: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <select class="form-select w-100 text-uppercase" name="sem" aria-label="Default select your semester">
                                <option value='' disabled selected>Select Your Semester</option>
                                <option value="1">1st</option>
                                <option value="3">3rd</option>
                            </select>
                            <div class="container d-flex flex-wrap text-danger" id="semErr"></div>
                        </div>
                        <!-- Semester Dropdown End -->

                        <!-- Roll No. Input Start -->
                        <label class="form-label fs-5 fw-semibold">Roll Number: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-uppercase" type="number" maxlength="4" pattern="^0[1-9]|[1-9]\d$" title="Please enter exactly 4 digits" name="roll_no" id="roll_no" placeholder="Enter Your Roll Number" onkeyup="lengthRollNo()">
                            <div class="container d-flex flex-wrap text-danger mb-2" id="rNoErr"></div>
                            <div class="container d-flex flex-wrap text-danger mb-2" id="rNoErr2"></div>
                        </div>
                        <!-- Roll No. Input End -->

                        <!-- Registraion No. Start -->
                        <label class="form-label fs-5 fw-semibold">Registration Number:</label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-uppercase" type="number" id="reg_no" maxlength="12" name="reg_no" placeholder="Enter Your Registration Number">
                            <div class="container d-flex flex-wrap text-danger" id="regErr"></div>
                        </div>
                        <!-- Registration No. End -->

                        <!-- Email ID Start -->
                        <label class="form-label fs-5 fw-semibold">Email:</label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control w-100 text-lowercase" type="email" value="<?php echo $email ?>" id="email" name="email" placeholder="Enter Your Email Id" readonly>
                            <div class="container d-flex flex-wrap text-danger" id="mailErr"></div>
                        </div>
                        <!-- Email ID End -->

                        <!-- Category Dropdown Start -->
                        <label class="form-label fs-5 fw-semibold">Category: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <select class="form-select w-100 text-uppercase" name="category" id="catagory" aria-label="Default select any category">
                                <option value="" disabled selected>Select any Category</option>
                                <option>General</option>
                                <option>SC/ST</option>
                                <option>BC</option>
                            </select>
                            <div class="container d-flex flex-wrap text-danger" id="categoryErr"></div>
                        </div>
                        <!-- Category Dropdown End -->

                        <!-- Address Start -->
                        <label class="form-label fs-5 fw-semibold">Address: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <textarea class="form-control text-uppercase" id="address_textarea" name="full_address" rows="3" placeholder="Enter Your Address Here"></textarea>
                            <div class="container d-flex flex-wrap text-danger" id="addressErr"></div>
                        </div>
                        <!-- Address End -->
                    </fieldset>

                    <!-- Student Profile Picture Start -->
                    <fieldset class="form-group border p-3 mx-3">
                        <label class="form-label fs-5 fw-semibold">Student's Profile Picture: <span class="text-danger">*</span></label>
                        <div class="form-group mx-2 align-items-center flex-fill">
                            <input class="form-control text-uppercase" type="file" id="image" name="image" onchange="fileExtValidation(); fileSizeValidation();">

                            <!-- Error Divs Start -->
                            <div class="container d-flex flex-wrap flex-wrap text-danger" id="profileErr"></div>
                            <div class="container d-flex flex-wrap flex-wrap text-danger" id="profileErr2"></div>
                            <div class="container d-flex flex-wrap flex-wrap text-danger" id="profileErr3"></div>
                            <!-- Error Divs End -->
                        </div>
                        <label class="form-label fs-5 fw-semibold">Student ID: <span class="text-danger">*</span></label>
                        <div class="row form-group align-items-center flex-fill">
                            <div class="col-lg-9 mb-3 container">
                                <input class="form-control w-100 text-uppercase fw-bold" type="number" name="s_id" id="s_id" style="color:red; " readonly>
                            </div>
                            <div class="col-lg-3 mb-3 container">
                                <button class=" btn btn-default w-100" type="button" value="Generate" name="gen" style="background-color: black;color:white;" onclick="generateId()">Generate ID</button>
                            </div>
                            <div class="container d-flex flex-wrap text-danger mb-2" id="stuIdErr"></div>
                        </div>
                    </fieldset><br>
                    <!-- Student Profile Picture End -->

                    <!-- Verification Start -->
                    <div class="form-check d-inline-flex">
                        <input class="form-check-input mx-1 p-2 d-inline-flex" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label d-inline-flex" for="flexCheckDefault">
                            <p class="mx-5 prevent-select"> I request for the membership of Guru Nanak Dev Polytechnic College
                                Library so as to get the service of library according to the rules. <br>
                                I hereby assure that I would abide by the rules & regulations of the Library.<br>
                                The above information is given by me is true and I take full responsibility of it.</p>
                        </label>
                    </div>
                    <!-- Verification End -->

                    <div class="container my-2"></div>

                    <div class="container d-flex justify-content-center">
                        <!-- Reset Button Start -->
                        <input class="form-control btn btn-danger mx-2 my-4 w-25" type="reset" value="RESET" name="reset">
                        <!-- Reset Button End -->

                        <!-- Submit Button Start -->
                        <button class="form-control btn btn-success mx-2 my-4 w-25" type="submit" value="SUBMIT" name="submit">SUBMIT</button>
                        <!-- Submit Button End -->

                    </div>
                    <div class="container"></div>
                </form>
            </div>
        </body>
    <?php
        include '../assets/layouts/footer.php';
    } else {
    ?>
        <div class="container d-flex flex-row justify-content-center">
            <div class="card col mx-2 my-3 p-3 rounded shadow" style="width:21rem;">
                <div class="media pt-3 card-body">
                    <p class="media-body pb-3 mb-0 small lh-125 text-danger">
                        You have already filled the Library Membership Form. <br>
                        Contact Librarian for any changes.
                    </p>
                </div>
            </div>
        </div>
<?php
    }
}
?>

<!-- Form Validation Script Start -->
<script>
    var a = document.membership;

    function Validate(event) {
        if (a.s_name.value == "") {
            // alert('Enter Name');
            document.getElementById("sNameErr").innerHTML = "Student name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("sNameErr").innerHTML = "";
        }

        if (a.f_name.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("fNameErr").innerHTML = "Father name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("fNameErr").innerHTML = "";
        }

        if (a.mob_no.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("mNoErr").innerHTML = "Mobile Number is missing!";
            event.preventDefault();
        } else {
            document.getElementById("mNoErr").innerHTML = "";
        }

        if (a.academic_year.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("accYearErr").innerHTML = "Academic year is missing!";
            event.preventDefault();
        } else {
            document.getElementById("accYearErr").innerHTML = "";
        }

        if (a.dept_name.selectedIndex == 0) {
            // alert('Enter Roll No.');
            document.getElementById("deptErr").innerHTML = "Department name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("deptErr").innerHTML = "";
        }

        if (a.sem.selectedIndex == 0) {
            // alert('Enter Roll No.');
            document.getElementById("semErr").innerHTML = "Semester is missing!";
            event.preventDefault();
        } else {
            document.getElementById("semErr").innerHTML = "";
        }

        if (a.roll_no.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("rNoErr").innerHTML = "Roll Number is missing!";
            event.preventDefault();
        } else {
            document.getElementById("rNoErr").innerHTML = "";
        }

        if (a.email.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("mailErr").innerHTML = "Email Address is missing!";
            event.preventDefault();
        } else {
            document.getElementById("mailErr").innerHTML = "";
        }

        if (a.category.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("categoryErr").innerHTML = "Category is missing!";
            event.preventDefault();
        } else {
            document.getElementById("categoryErr").innerHTML = "";
        }

        if (a.full_address.value == "") {
            // alert('Enter Roll No.');
            document.getElementById("addressErr").innerHTML = "Address is missing!";
            event.preventDefault();
        } else {
            document.getElementById("addressErr").innerHTML = "";
        }

        if (a.image.value == "") {
            document.getElementById("profileErr").innerHTML = "Student Profile is missing!";
            event.preventDefault();
        } else {
            document.getElementById("profileErr").innerHTML = "";
        }

        if (a.s_name.value == "" || a.f_name.value == "" || a.mob_no.value == "" || a.academic_year.value == "" || a.dept_name.selectedIndex == 0 || a.sem.selectedIndex == 0 || a.roll_no.value == "" || a.category.selectedIndex == 0 || a.full_address.value == "" || a.image.value == "") {
            return false;
        }
    }
</script>
<!-- Form Validation Script End -->

<script>
    // Mobile Number Length Validation Start
    function lengthMobile() {
        var regNo = document.getElementById("mobile_no");
        if (regNo.value.length == 10) {
            document.getElementById("mNoErr2").innerHTML = "";
            return true;
        } else {
            document.getElementById("mNoErr2").innerHTML = "Mobile No. should be 10 digits!"
            return false;

        }
    }
    // Mobile Number Length Validation End

    // Roll No. Length Validation Start
    function lengthRollNo() {
        var regNo = document.getElementById("roll_no");
        if (regNo.value.length == 4) {
            document.getElementById("rNoErr2").innerHTML = "";
            return true;
        } else {
            document.getElementById("rNoErr2").innerHTML = "Roll No. should be 4 digits!"
            return false;
        }
        if (elem.value.length > 4) {
            elem.value = elem.value.slice(0, 4);
        }
    }
    // Roll No. Length Validation End

    // Registration No. Length Validation Start
    function lengthReg() {
        var regNo = document.getElementById("reg_no");
        if (regNo.value.length == 12) {
            document.getElementById("regErr").innerHTML = "";
            return true;
        } else {
            document.getElementById("regErr").innerHTML = "Registration No. should be 12 digits!"
            return false;
        }
    }
    // Registration No. Length Validation End

    function fileExtValidation() {
        var fileInput = document.getElementById("image");
        var filePath = fileInput.value;
        // Allowing file type
        var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

        if (!allowedExtensions.exec(filePath)) {
            document.getElementById("profileErr2").innerHTML = "Invalid File Type";
            // alert("Invalid File Type");
            fileInput.value = '';
            return false;
        } else {
            document.getElementById("profileErr2").innerHTML = "";
        }
    }

    function fileSizeValidation() {
        var imgInput = document.getElementById("image");
        $("#profileErr3").html("");
        var file_size = $('#image')[0].files[0].size;
        if (file_size > 2097152) {
            $("#profileErr3").html("File size is greater than 2MB");
            $("#image").val('');
            return false;
        }
        return true;
    }
</script>

<script>
    function generateId() {
        const rollNumber = document.getElementById('roll_no').value;
        const currentYear = new Date().getFullYear().toString().slice(-2); // Extract last 2 digits of year
        if (rollNumber == "") {
            alert("Enter Roll No. to generate Your Student Id");
        } else {
            const id = `${rollNumber}${currentYear}`;
            document.getElementById('s_id').value = id;
        }
    }
</script>

</html>

<!-- php code start here -->
<?php
if (isset($_POST['submit'])) {
    $Date = $_POST['current_date'];
    $S_Name = $_POST['s_name'];
    $F_Name = $_POST['f_name'];
    $Mobile_Number = $_POST['mob_no'];
    $Academic_Year = $_POST['academic_year'];
    $Department = $_POST['dept_name'];
    $Semester = $_POST['sem'];
    $Roll_no = $_POST['roll_no'];
    $Registration_Number = $_POST['reg_no'];
    $email = $_POST['email'];
    $Category = $_POST['category'];
    $Full_Address = $_POST['full_address'];
    $Student_Id = $_POST['s_id'];

    // PHP Code to Upload Student Profile Start
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "upload/" . $filename;
    // PHP Code to Upload Student Profile End

    // PHP Code to Upload data in database Start
    $qry = "INSERT INTO Library_membership_form VALUES('1','$Date',UPPER('$S_Name'),UPPER('$F_Name'),'$Mobile_Number','$Department','$Semester','$Academic_Year','$Roll_no','$Registration_Number','$email',UPPER('$Category'),UPPER('$Full_Address'),'$filename','$Student_Id')";  
    $result = mysqli_query($conn, $qry);
    // PHP Code to Upload data in database End

    if (move_uploaded_file($tempname, $folder) && $result) {
        echo '<script>
        alert("Your data is successfully entered.");
        window.location.href="../home/";
        </script>';
    } else {
        echo "<script>
        alert (`Your data can't be successfully entered.`);
        window.location.href='../membership_form/';
        </script>";
    }
}

?>
<!-- php code end here -->
<?php

// include '../assets/layouts/footer.php'

?>