<?php

define('TITLE', "Issue Book");
include '../assets/layouts/header.php';
check_verified();
error_reporting(0);


// include_once 'includes/db.inc.php';
$id = $_GET['s_id'];
$id2 = $_GET['accession_no'];
$query = "select * from library_membership_form where Student_Id=$id";
$query2 = "select * from admin_books where Accession_No=$id2";
$data = mysqli_query($conn, $query);
$data2 = mysqli_query($conn, $query2);
while (($res = mysqli_fetch_array($data)) and  ($res2 = mysqli_fetch_array($data2))) {
    // for student
    $S_Id = $res[14];
    $R_no = $res[8];
    $S_name = $res[2];
    $Dept_Name = $res[5];
    $S_category = $res[11];
    $Email = $res[10];
    // for book
    $Accession_no = $res2[0];
    $Book_name = $res2[4];
    $Author_name = $res2[5];
    $Pub_name = $res2[6];
    $Edition = $res2[8];
    $Year = $res2[9];
    $Volume = $res2[10];
}
?>

<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- Here date picker library link start -->
<!-- Ajax link here  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
<script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
<!-- Here date picker library link end -->

<style>
    /* Custom Scrollbar Start */
    body::-webkit-scrollbar {
        /* width of the entire scrollbar */
        width: 8px;
    }

    body::-webkit-scrollbar-track {
        /* color of the tracking area */
        background: grey;
    }

    body::-webkit-scrollbar-thumb {
        /* color of the scroll thumb */
        background-color: blue;
        /* roundness of the scroll thumb */
        border-radius: 15px;
    }

    /* Custom Scrollbar End */

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<!-- Main Heading Block -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Book Issue Form</h6>
</div>

<!-- Form Start Here -->
<div class="container d-flex flex-row justify-content-center">
    <form name="issueBook" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select shadow" onsubmit="return Validate()" action="#">

        <!-- Here Feildset Of Student Detail -->
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
            <!-- Here Student ID & Student Name & Roll No. Feild  Here -->
            <label class="form-label fs-5 fw-semibold">Student Id:</label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="number" name="S_Id" readonly value="<?php echo $S_Id; ?>">
            </div>

            <label class="form-label fs-5 fw-semibold">Roll No.:</label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="number" name="r_no" placeholder="Enter the Student Roll No." readonly value="<?php echo $R_no; ?>">
                <div class="container d-flex flex-wrap text-danger" id="rNoErr"></div>
            </div>


            <label class="form-label fs-5 fw-semibold">Student Name: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="text" name="s_name" placeholder="Enter the Student Name" autofocus value="<?php echo $S_name; ?>">
                <div class="container d-flex flex-wrap text-danger" id="sNameErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Department Name:</label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <select class="form-control w-100 mb-1 text-uppercase" value="" name="Dept_Name">
                    <option value="" disabled selected>Select Your Department</option>
                    <option value="CSE" <?php
                                        if ($Dept_Name == 'CSE') {
                                            echo "selected";
                                        } ?>>Computer Science & 0Engineering</option>
                    <option value="AE" <?php
                                        if ($Dept_Name == 'AE') {
                                            echo "selected";
                                        } ?>>Automobile Engineering</option>
                    <option value="CE" <?php
                                        if ($Dept_Name == 'CE') {
                                            echo "selected";
                                        } ?>>Civil Engineering</option>
                    <option value="ECE" <?php
                                        if ($Dept_Name == 'ECE') {
                                            echo "selected";
                                        } ?>>Electronics & Communication Engineering</option>
                    <option value="EE" <?php
                                        if ($Dept_Name == 'EE') {
                                            echo "selected";
                                        } ?>>Electrical Engineering</option>
                    <option value="ME" <?php
                                        if ($Dept_Name == 'ME') {
                                            echo "selected";
                                        } ?>>Mechanical Engineering</option>
                    <option value="AS" <?php
                                        if ($Dept_Name == 'AS') {
                                            echo "selected";
                                        } ?>>Applied Science</option>
                </select>
                <div class="container d-flex flex-wrap text-danger" id="deptErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Category: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <select class="form-control w-100 mb-1 text-uppercase" value="" name="category">
                    <option value="" disabled selected>Select Your Category</option>
                    <option value="GENERAL" <?php
                                            if ($S_category == 'GENERAL') {
                                                echo "selected";
                                            } ?>>GENERAL</option>
                    <option value="SC/ST" <?php
                                            if ($S_category == 'SC/ST') {
                                                echo "selected";
                                            } ?>>SC/ST</option>
                    <option value="CE" <?php
                                        if ($S_category == 'BC') {
                                            echo "selected";
                                        } ?>>BC</option>
                </select>
                <div class="container d-flex flex-wrap text-danger" id="categoryErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Email: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="email" name="email" placeholder="Enter your Email Id" value="<?php echo $Email; ?>">
                <div class="container d-flex flex-wrap text-danger" id="emailErr"></div>
            </div>
        </fieldset>

        <!-- Here Feildset of Book Detail -->
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
            <!-- Here Issue Date & Return Date Feild -->
            <label class="form-label fs-5 fw-semibold">Issue Date:</label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control form-control w-100" type="date" name="issue_date" value="<?php echo date("Y-m-d"); ?>" readonly>
            </div>

            <label class="form-label fs-5 fw-semibold">Due Date:</label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control form-control w-100" type="date" name="due_date" value="<?php echo date('Y-m-d', strtotime('+ 14 days')); ?>" readonly>
            </div>

            <!-- Here Book No. & Book Name Feild -->
            <label class="form-label fs-5 fw-semibold">Accession No.: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="text" inputmode="numeric" name="accession_no" placeholder="Enter Accession No. Here" value="<?php echo $Accession_no; ?>" readonly>
                <div class="container d-flex flex-wrap text-danger" id="accessionNoErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Book Name: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="text" name="book_name" placeholder="Enter the Name Of Book" value="<?php echo $Book_name; ?>">
                <div class="container d-flex flex-wrap text-danger" id="bookNameErr"></div>
            </div>

            <!-- Here Author Name and Publisher Name Field -->
            <label class="form-label fs-5 fw-semibold">Author Name: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="text" name="author_name" placeholder="Enter the Name Of Author" value="<?php echo $Author_name; ?>">
                <div class="container d-flex flex-wrap text-danger" id="authorNameErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Publisher Name: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="text" name="pub_name" placeholder="Enter the Name of Publisher" value="<?php echo $Pub_name; ?>">
                <div class="container d-flex flex-wrap text-danger" id="pubNameErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Edition: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="number" name="edition" placeholder="Enter The Edition of Book" value="<?php echo $Edition; ?>">
                <div class="container d-flex flex-wrap text-danger" id="editionErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Year: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" autocomplete="off" type="number" name="year" id="datepicker" placeholder="Enter the Year Here" value="<?php echo $Year; ?>" readonly>
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
                <div class="container d-flex flex-wrap text-danger" id="yearErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">Volume: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="number" name="volume" placeholder="Enter The Volume of Book" value="<?php echo $Volume; ?>">
                <div class="container d-flex flex-wrap text-danger" id="volumeErr"></div>
            </div>
        </fieldset><br>

        <div class="container d-flex justify-content-center">
            <button class="form-control btn btn-danger mx-2 mb-4 w-25" type="reset" value="RESET" name="reset">RESET</button>
            <button class="form-control btn btn-success mx-2 mb-4 w-25" type="submit" value="SUBMIT" name="submit">SUBMIT</button>

        </div>
    </form>
</div>

<!-- Form End Here -->

<!-- Form Validation Script Start -->
<script>
    var a = document.issueBook;

    function Validate() {
        if (a.s_name.value == "") {
            // alert('Enter Name');
            document.getElementById("sNameErr").innerHTML = "Student name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("sNameErr").innerHTML = "";
        }

        if (a.dept_name.selectedIndex == 0) {
            // alert('Enter Roll No.');
            document.getElementById("deptNameErr").innerHTML = "Department name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("deptNameErr").innerHTML = "";
        }

        if (a.sem.selectedIndex == 0) {
            // alert('Enter Roll No.');
            document.getElementById("semErr").innerHTML = "Semester is missing!";
            event.preventDefault();
        } else {
            document.getElementById("semErr").innerHTML = "";
        }

        if (a.category.value == 0) {
            // alert('Enter Roll No.');
            document.getElementById("categoryErr").innerHTML = "Category is missing!";
            event.preventDefault();
        } else {
            document.getElementById("categoryErr").innerHTML = "";
        }

        if (a.email.value == 0) {
            // alert('Enter Roll No.');
            document.getElementById("emailErr").innerHTML = "Email is missing!";
            event.preventDefault();
        } else {
            document.getElementById("emailErr").innerHTML = "";
        }

        if (a.accession_no.value == "") {
            // alert('Enter Name');
            document.getElementById("accessionNoErr").innerHTML = "Accession number is missing!";
            event.preventDefault();
        } else {
            document.getElementById("accessionNoErr").innerHTML = "";
        }

        if (a.book_name.value == "") {
            // alert('Enter Name');
            document.getElementById("bookNameErr").innerHTML = "Book name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("bookNameErr").innerHTML = "";
        }

        if (a.author_name.value == "") {
            // alert('Enter Name');
            document.getElementById("authorNameErr").innerHTML = "Author name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("authorNameErr").innerHTML = "";
        }

        if (a.pub_name.value == "") {
            // alert('Enter Name');
            document.getElementById("pubNameErr").innerHTML = "Publisher name is missing!";
            event.preventDefault();
        } else {
            document.getElementById("pubNameErr").innerHTML = "";
        }

        if (a.edition.value == "") {
            // alert('Enter Name');
            document.getElementById("editionErr").innerHTML = "Book Edition is missing!";
            event.preventDefault();
        } else {
            document.getElementById("editionErr").innerHTML = "";
        }

        if (a.year.value == "") {
            // alert('Enter Name');
            document.getElementById("yearErr").innerHTML = "Year is missing!";
            event.preventDefault();
        } else {
            document.getElementById("yearErr").innerHTML = "";
        }

        if (a.volume.value == "") {
            // alert('Enter Name');
            document.getElementById("volumeErr").innerHTML = "Book volume is missing!";
            event.preventDefault();
        } else {
            document.getElementById("volumeErr").innerHTML = "";
        }

        if (a.s_name.value == "" || a.dept_name.selectedIndex == 0 || a.accession_no.value == "" || a.sem.selectedIndex == 0 || a.category.selectedIndex == 0 || a.book_name.value == "" || a.author_name.value == "" || a.pub_name.value == "" || a.edition.value == "" || a.year.value == "" || a.volume.value == "") {
            return false;
        }
    }
    //      
</script>
<!-- Form Validation Script End -->

</body>

</html>

<!-- PHP Code to Enter Book Details into the Database Start -->
<?php
if (isset($_POST['submit'])) {

    $S_Id = $_POST['S_Id'];
    $Roll_No = $_POST['r_no'];
    $S_Name = $_POST['s_name'];
    $Dept = $_POST['Dept_Name'];
    $Category = $_POST['category'];
    $Email = $_POST['email'];
    $Issue_Date = $_POST['issue_date'];
    $Due_Date = $_POST['due_date'];
    $Accession_No = $_POST['accession_no'];
    $Book_Name = $_POST['book_name'];
    $Author_Name = $_POST['author_name'];
    $Publisher_Name = $_POST['pub_name'];
    $Edition = $_POST['edition'];
    $Year = $_POST['year'];
    $Volume = $_POST['volume'];
    $qry = "INSERT into issue_book values('$S_Id','$Roll_No',UPPER('$S_Name'),'$Dept',UPPER('$Category'),UPPER('$Email'),'$Issue_Date','$Due_Date','$Accession_No','$Book_Name','$Author_Name','$Publisher_Name','$Edition','$Year','$Volume')";
    $result = mysqli_query($conn, $qry);

    if (isset($result)) {
        echo '<script>
            alert("Your data is successfully entered.");
            window.location.href="index.php";
            </script>';
    } else {
        echo "<script>
            alert (`Your data can't be entered.`);
            window.location.href='issue_book.php';
            </script>";
    }
}
?>
<!-- PHP Code to Enter Book Details into the Database End -->


<!-- Form End Here -->


<!-- Bootstrap JavaScript Start -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript End -->

<!-- Footer Start -->
<?php

include '../assets/layouts/footer.php'

?>

<!-- Footer End -->
