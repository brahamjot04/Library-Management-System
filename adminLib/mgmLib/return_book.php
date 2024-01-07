<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .input-group button {
        margin-right: -12px;

    }
</style>

<?php

define('TITLE', "Return Book");
include '../assets/layouts/header.php';
// error_reporting(0);
check_verified();
?>

<?php
$qry = "SELECT `Sr_no` from return_book order by Sr_no desc";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
$lastid = $row['Sr_no'];
if (empty($lastid)) {
    $number = 1;
} else {
    $idd = ($lastid);
    $id = str_pad($idd + 1, 0, 0, STR_PAD_LEFT);
    $number = $id;
}
?>


<?php

$id1 = $_GET['accession_no'];
$qry = "SELECT * FROM issue_book WHERE Accession_No=$id1";
// $qry2="SELECT DATE_FORMAT(`Issue_Date`,'%d-%m-%Y') as Issue_Date FROM issue_book WHERE Accession_No=$id1 ";
$data = mysqli_query($conn, $qry);
// $data2 = mysqli_query($conn, $qry2);
while (($res = mysqli_fetch_array($data))) {
    $S_Id = $res[0];
    $R_no = $res[1];
    $S_name = $res[2];
    $Dept_Name = $res[3];
    $S_category = $res[4];
    $Issue_Date = $res[6];
    $Due_Date = $res[7];
    $Accession_no = $res[8];
    $Book_name = $res[9];
    $Author_name = $res[10];
    $Pub_name = $res[11];
    $Edition = $res[12];
    $Year = $res[13];
    $Volume = $res[14];
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
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Return Book</h6>
</div>

<!-- Form Start Here -->
<div class="container d-flex flex-row justify-content-center">
    <form name="returnBook" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select shadow" onsubmit="return Validate()" action="#">

        <!-- Here Feildset Of Student Detail -->
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
            <!-- Here Student Id & Student Name & Roll No. Feild -->
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Sr. No.:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="number" name="Sr_no" readonly value="<?php echo $number; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Student Id:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="number" name="S_Id" readonly value="<?php echo $S_Id; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Roll No.:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="number" name="r_no" placeholder="Enter the Student Roll No." readonly value="<?php echo $R_no; ?>" readonly>
                    </div>
                </div>
            </div>


            <label class="form-label fs-5 fw-semibold">Student Name:</label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="text" name="s_name" placeholder="Enter the Student Name" value="<?php echo $S_name; ?>" readonly>
                <div class="container d-flex flex-wrap text-danger" id="sNameErr"></div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Department Name:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <select class="form-control w-100 mb-1 text-uppercase" value="" name="Dept_Name" readonly>
                            <option value="" disabled selected>Select Your Department</option>
                            <option value="CSE" <?php if ($Dept_Name == 'CSE') {
                                                    echo "selected";
                                                } ?>>Computer Science
                                Engineering</option>
                            <option value="AE" <?php if ($Dept_Name == 'AE') {
                                                    echo "selected";
                                                } ?>>Automobile Engineering
                            </option>
                            <option value="CE" <?php if ($Dept_Name == 'CE') {
                                                    echo "selected";
                                                } ?>>Civil Engineering</option>
                            <option value="ECE" <?php if ($Dept_Name == 'ECE') {
                                                    echo "selected";
                                                } ?>>Electronics &
                                Communication Engineering</option>
                            <option value="EE" <?php if ($Dept_Name == 'EE') {
                                                    echo "selected";
                                                } ?>>Electrical Engineering
                            </option>
                            <option value="ME" <?php if ($Dept_Name == 'ME') {
                                                    echo "selected";
                                                } ?>>Mechanical Engineering
                            </option>
                            <option value="AS" <?php if ($Dept_Name == 'AS') {
                                                    echo "selected";
                                                } ?>>Applied Science</option>
                        </select>
                        <div class="container d-flex flex-wrap text-danger" id="deptErr"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Category:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <select class="form-control w-100 mb-1 text-uppercase" value="" name="category" readonly>
                            <option value="" disabled selected>Select Your Category</option>
                            <option value="GENERAL" <?php if ($S_category == 'GENERAL') {
                                                        echo "selected";
                                                    } ?>>GENERAL</option>
                            <option value="SC/ST" <?php if ($S_category == 'SC/ST') {
                                                        echo "selected";
                                                    } ?>>SC/ST</option>
                            <option value="CE" <?php if ($S_category == 'BC') {
                                                    echo "selected";
                                                } ?>>BC</option>
                        </select>
                        <div class="container d-flex flex-wrap text-danger" id="categoryErr"></div>
                    </div>
                </div>
            </div>
        </fieldset>

        <!-- Here Feildset of Book Detail -->
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
            <!-- Here Issue Date & Return Date Feild -->
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label fs-5 fw-semibold">Issue Date:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control form-control w-100" type="date" name="issue_date" value="<?php echo $Issue_Date ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="issueDateErr"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fs-5 fw-semibold">Due Date:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control form-control w-100" type="date" name="due_date" id="due_date" value="<?php echo $Due_Date; ?>">
                        <div class="container d-flex flex-wrap text-danger" id="dueDateErr"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fs-5 fw-semibold">Return Date:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control form-control w-100" type="date" name="return_date" id="return_date" value="<?php echo date('Y-m-d'); ?>">
                        <div class="container d-flex flex-wrap text-danger" id="returnDateErr"></div>
                    </div>
                </div>
            </div>

            <!-- Here Book No. & Book Name Feild -->
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Accession No.:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="text" inputmode="numeric" name="accession_no" placeholder="Enter Accession No. Here" value="<?php echo $Accession_no; ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="accessionNoErr"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Book Name:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="text" name="book_name" placeholder="Enter the Name Of Book" value="<?php echo $Book_name; ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="bookNameErr"></div>
                    </div>
                </div>
            </div>

            <!-- Here Author Name and Publisher Name Field -->
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Author Name:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="text" name="author_name" placeholder="Enter the Name Of Author" value="<?php echo $Author_name; ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="authorNameErr"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <label class="form-label fs-5 fw-semibold">Publisher Name:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="text" name="pub_name" placeholder="Enter the Name of Publisher" value="<?php echo $Pub_name; ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="pubNameErr"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label class="form-label fs-5 fw-semibold">Edition:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="number" name="edition" placeholder="Enter The Edition of Book" value="<?php echo $Edition; ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="editionErr"></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fs-5 fw-semibold">Year:</label>
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
                </div>

                <div class="col-md-4">
                    <label class="form-label fs-5 fw-semibold">Volume:</label>
                    <div class="form-group mx-2 align-items-center flex-fill">
                        <input class="form-control w-100 text-uppercase" type="number" name="volume" placeholder="Enter The Volume of Book" value="<?php echo $Volume; ?>" readonly>
                        <div class="container d-flex flex-wrap text-danger" id="volumeErr"></div>
                    </div>
                </div>
            </div>

            <?php
            $qry = "SELECT s_key from fine_security where sr_no=1";
            $result = mysqli_query($conn, $qry);
            while ($r = mysqli_fetch_array($result)) {
                $securityKey = $r[0];
                echo '
                <label class="form-label fs-5 fw-semibold">Fine: <span class="text-danger">*</span></label>
                <div class="row g-3 form-group align-items-center flex-fill">
                    <div class="col-lg-8 form-group align-items-center flex-fill">
                        <input class="form-control mx-2 w-100 text-uppercase fw-bold pr-0" style="color:red; " type="number" name="fine"  step="0.01" min="0" max="10000000000"id="fine" readonly>
                    </div>
                    
                    <div class="col-lg-1 form-group align-items-center flex-fill">
                        <button type="button" id="edit-fine-btn" class="btn btn-primary ml-2"><i class="fas fa-edit w-5"></i></button>
                    </div>

                    <div class="col-lg-3 form-group align-items-center flex-fill">
                        <button type="button" onclick="calculateFine()" class="btn btn-light w-100 text-white" style="background-color:black;">Calculate Fine</button>
                    </div>
                </div>';
            }

            ?>

            <label class="form-label fs-5 fw-semibold">Fine type: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill">
                <select class="form-control w-100 mb-1 text-uppercase" name="fine_type">
                    <option value="" disabled selected>Select Your Type</option>
                    <option value="yes">Yes</option>
                    <option value="no_fine">No Fine</option>
                </select>
                <div class="container d-flex flex-wrap text-danger" id="fineStatusErr"></div>
            </div>

            <?php
            $currentDate = date('dmy');

            // get last two digit of rollnumber              /* the logic is for the creating the incoice id */
            $rollNo = substr($R_no, -2);

            // Combine the string
            $invoiceNo = 'LIB' . $currentDate . $rollNo . $Accession_no;
            ?>


            <label class="form-label fs-5 fw-semibold">Invoice No: <span class="text-danger">*</span></label>
            <div class="row g-3 form-group align-items-center flex-fill">
                <div class="col-lg-8 form-group align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase fw-bold pr-0" type="text" name="invoice_id" id="invoice_id" style="color:blue;" placeholder="Invoice Number" value="<?php echo $invoiceNo; ?>" readonly>
                </div>

                <div class="col-lg-1 form-group align-items-center flex-fill">
                    <button type="button" id="copyButton" class="btn btn-primary ml-2"><i class="fas fa-copy"></i> </button>
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
    var a = document.returnBook;

    function Validate() {
        if (a.fine_status.selectedIndex == 0) {
            // alert('Enter Name');
            document.getElementById("fineStatusErr").innerHTML = "Fine Status is missing!";
            event.preventDefault();
        } else {
            document.getElementById("fineStatusErr").innerHTML = "";
        }

        if (a.fine_status.selectedIndex == 0) {
            return false;
        }
    }
    //
</script>
<!-- Form Validation Script End -->
<script>
    var fineInput = document.getElementById('fine'); // Get the "Fine" input element
    var editFineBtn = document.getElementById('edit-fine-btn'); // Get the "Edit" button element
    var securityKey = '<?php echo $securityKey ?>'; // Set the security key

    editFineBtn.addEventListener('click', function() {
        var enteredKey = prompt('Enter Security Key'); // Show a pop-up to get the security key input from the user
        if (enteredKey === securityKey) {
            fineInput.removeAttribute('readonly'); // Remove the "readonly" attribute from the "Fine" input field
            editFineBtn.disabled = true; // Disable the "Edit" button again
        } else {
            alert('Invalid security key'); // Display an error message if the security key is incorrect
        }
    });
</script>
</body>

</html>

<!-- PHP Code to Enter Book Details into the Database Start -->
<?php
if (isset($_POST['submit'])) {

    $Sr_no = $_POST['Sr_no'];
    $S_Id = $_POST['S_Id'];
    $Roll_No = $_POST['r_no'];
    $S_Name = $_POST['s_name'];
    $Dept = $_POST['Dept_Name'];
    $Category = $_POST['category'];
    $Issue_Date = $_POST['issue_date'];
    $Due_Date = $_POST['due_date'];
    $Return_Date = $_POST['return_date'];
    $Accession_No = $_POST['accession_no'];
    $Book_Name = $_POST['book_name'];
    $Author_Name = $_POST['author_name'];
    $Publisher_Name = $_POST['pub_name'];
    $Edition = $_POST['edition'];
    $Year = $_POST['year'];
    $Volume = $_POST['volume'];
    $fine = $_POST['fine'];
    $fine_type = $_POST['fine_type'];
    $Invoice_Id = $_POST['invoice_id'];
    $qry = "INSERT into return_book values('$Sr_no','$S_Id','$Roll_No',UPPER('$S_Name'),'$Dept',UPPER('$Category'),'$Issue_Date','$Due_Date','$Return_Date','$Accession_No','$Book_Name','$Author_Name','$Publisher_Name','$Edition','$Year','$Volume','$fine',UPPER('$fine_type'),UPPER('$Invoice_Id'))";
    $result = mysqli_query($conn, $qry);
    $qry2 = "DELETE FROM issue_book WHERE Accession_No=$id1";
    $result1 = mysqli_query($conn, $qry2);

    if (isset($result)) {
        echo '<script>
            alert("Your data is successfully entered.");
            window.location.href="index.php";
            </script>';
    } else {
        echo "<script>
            alert(`Your data can't be entered.`);
            window.location.href = 'issue_book.php';
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
<script>
    function calculateFine() {
        var date1 = document.getElementById("due_date").value;
        var date2 = document.getElementById("return_date").value;

        function dateDiff(date1, date2) {
            var date1_ts = new Date(date1).getTime();
            var date2_ts = new Date(date2).getTime();
            var diff = date2_ts - date1_ts;
            if (diff < 0) {
                return "0.00"
            } else {
                var fine = Math.round(diff / 86400000) * 0.5;
                return fine.toFixed(2);
            }
        }
        var fine = dateDiff(date1, date2);
        document.getElementById("fine").value = fine;
    }
</script>

<!-- this script for copying the invoice id-->
<script>
    var copyButton = document.getElementById('copyButton');
    var invoiceNoInput = document.getElementById('invoice_id');

    copyButton.addEventListener('click', function() {
        // Select the contents of the invoice ID input field
        invoiceNoInput.select();
        invoiceNoInput.setSelectionRange(0, 99999); // For mobile devices

        // Copy the selected text to the clipboard
        document.execCommand('copy');
    });
</script>