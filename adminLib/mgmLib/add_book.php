<!-- Header Start -->
<?php

define('TITLE', "Add Book");
include '../assets/layouts/header.php';
check_verified();
error_reporting(0);

?>
<?php
$qry = "SELECT `Accession_No` from admin_books order by Accession_No desc";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
$lastid = $row['Accession_No'];
if (empty($lastid)) {
    $number = 1;
} else {
    $idd = ($lastid);
    $id = str_pad($idd + 1, 0, 0, STR_PAD_LEFT);
    $number = $id;
}
?>
<!-- Header End -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

    <!-- Here date picker library link start -->
    <!-- Ajax link here  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Here date picker library link end -->

    <style>
        /* disable right side control icon of input feild */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body oncontextmenu="return false" class="prevent-select">
    <!-- Main Heading Block -->
    <div class="container-fluid my-4">
        <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Add New Book</h6>
    </div>

    <!-- Form Start Here -->
    <div class="container d-flex flex-row justify-content-center">
        <form name="addNewBook" action="#" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select shadow" onsubmit="return Validate(event)">
            <fieldset class="form-group border px-3 pt-3 mx-3 mt-4">
                <label class="form-label fs-5 fw-semibold">Date: <span class="text-danger">*</span></label>
                <div class="form-group mx-3 align-items-center flex-fill">
                    <input class="form-control w-100 mx-2 text-uppercase" type="date" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                    <div class="container d-flex flex-wrap text-danger" id="dateErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Bill No.: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 mb-2 text-uppercase" type="text" name="bill_no" placeholder="Enter Bill No. Here" autofocus>
                    <div class="container d-flex flex-wrap text-danger" id="billNoErr"></div>
                </div>


                <label class="form-label fs-5 fw-semibold">Book Price: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 mb-2 text-uppercase" type="number" inputmode="numeric" name="amount" placeholder="Enter the Book Price">
                    <div class="container d-flex flex-wrap text-danger" id="amountErr"></div>
                </div>
            </fieldset>

            <fieldset class="form-group border p-3 mx-3">
                <label class="form-label fs-5 fw-semibold">Accession No.: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 mb-2 text-uppercase text-danger" type="number" inputmode="numeric" name="accession_no" style="font-size: 1.2rem; font-weight: bold;" value="<?php echo $number; ?>" readonly>
                </div>

                <label class="form-label fs-5 fw-semibold">Book Name: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 text-uppercase" type="text" name="book_name" placeholder="Enter The Name Of Book">
                    <div class="container d-flex flex-wrap text-danger" id="bookNameErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Author Name: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="text" name="author_name" placeholder="Enter The Name Of Author">
                    <div class="container d-flex flex-wrap text-danger" id="authorNameErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Publisher Name: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="text" name="pub_name" placeholder="Enter The Name Of Publisher">
                    <div class="container d-flex flex-wrap text-danger" id="pubNameErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Place: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="text" name="place" placeholder="Enter The Seller Location">
                    <div class="container d-flex flex-wrap text-danger" id="placeErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Edition: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="number" name="edition" placeholder="Enter The Edition of Book">
                    <div class="container d-flex flex-wrap text-danger" id="editionErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Year: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" autocomplete="off" type="number" name="year" id="datepicker" readonly placeholder="Enter the Year Here">
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
                    <input class="form-control w-100 text-uppercase" type="number" name="volume" placeholder="Enter The Volume of Book">
                    <div class="container d-flex flex-wrap text-danger" id="volumeErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Total Pages: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="number" name="pages" placeholder="Enter The Total Pages of Book">
                    <div class="container d-flex flex-wrap text-danger" id="pagesErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Department: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <select class="form-select w-100 mb-1 text-uppercase" name="dept_name" aria-label="Default select your department">
                        <option value='' disabled selected>Select any Department</option>
                        <option value='CSE'>Computer Science & Engineering</option>
                        <option value='AE'>Automobile Engineering</option>
                        <option value='CE'>Civil Engineering</option>
                        <option value='ECE'>Electronics & Communication Engineering</option>
                        <option value='EE'>Electrical Engineering</option>
                        <option value='ME'>Mechanical Engineering</option>
                        <option value='AS'>Applied Science</option>
                        <option value='Literature'>Literature</option>
                        <option value='Reference'>Other Reference</option>
                    </select>
                    <div class="container d-flex flex-wrap text-danger" id="deptErr"></div>
                </div>
            </fieldset>
            <br>

            <div class="container d-flex justify-content-center">
                <button class="form-control btn btn-danger mx-2 mb-4 w-25" type="reset" value="RESET" name="reset">RESET</button>
                <button class="form-control btn btn-success mx-2 mb-4 w-25" type="submit" value="SUBMIT" name="submit">SUBMIT</button>
            </div>

        </form>
    </div>

    <!-- Form Validation Script Start -->
    <script>
        var a = document.addNewBook;

        function Validate(event) {
            if (a.current_date.value == "") {
                // alert('Enter Name');
                document.getElementById("dateErr").innerHTML = "Date is missing!";
                event.preventDefault();
            } else {
                document.getElementById("dateErr").innerHTML = "";
            }

            if (a.bill_no.value == "") {
                // alert('Enter Name');
                document.getElementById("billNoErr").innerHTML = "Bill number is missing!";
                event.preventDefault();
            } else {
                document.getElementById("billNoErr").innerHTML = "";
            }

            if (a.amount.value == "") {
                // alert('Enter Name');
                document.getElementById("amountErr").innerHTML = "Book price is missing!";
                event.preventDefault();
            } else {
                document.getElementById("amountErr").innerHTML = "";
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

            if (a.place.value == "") {
                // alert('Enter Name');
                document.getElementById("placeErr").innerHTML = "Seller location name is missing!";
                event.preventDefault();
            } else {
                document.getElementById("placeErr").innerHTML = "";
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

            if (a.pages.value == "") {
                // alert('Enter Name');
                document.getElementById("pagesErr").innerHTML = "No. of pages in book are missing!";
                event.preventDefault();
            } else {
                document.getElementById("pagesErr").innerHTML = "";
            }

            if (a.dept_name.selectedIndex == 0) {
                // alert('Enter Roll No.');
                document.getElementById("deptErr").innerHTML = "Department name is missing!";
                event.preventDefault();
            } else {
                document.getElementById("deptErr").innerHTML = "";
            }

            if (a.current_date.value == "" || a.bill_no.value == "" || a.amount.value == "" || a.book_name.value == "" || a.author_name.value == "" || a.pub_name.value == "" || a.place.value == "" || a.edition.value == "" || a.year.value == "" || a.volume.value == "" || a.pages.value == "" || a.dept_name.selectedIndex == 0) {
                return false;
            }
        }
    </script>
    <!-- Form Validation Script End -->

</body>

</html>

<!-- PHP Code to Enter Book Details into the Database Start -->
<?php
if (isset($_POST['submit'])) {
    $Accession_No = $_POST['accession_no'];
    $Date = $_POST['current_date'];
    $Bill_No = $_POST['bill_no'];
    $Price = $_POST['amount'];
    $Book_Name = $_POST['book_name'];
    $Author_Name = $_POST['author_name'];
    $Publisher_Name = $_POST['pub_name'];
    $Place = $_POST['place'];
    $Edition = $_POST['edition'];
    $Year = $_POST['year'];
    $Volume = $_POST['volume'];
    $Pages = $_POST['pages'];
    $Department_Name = $_POST['dept_name'];
    $qry = "INSERT into admin_books values('$Accession_No','$Date','$Bill_No','$Price','$Book_Name','$Author_Name','$Publisher_Name','$Place','$Edition','$Year','$Volume','$Pages','$Department_Name')";
    $result = mysqli_query($conn, $qry);
    if (isset($result)) {
        echo "<script> alert('Your data is Successfully entered!'); </script>";
    } else {
        echo "<script> alert('Your data can't be entered!'); </script>";
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