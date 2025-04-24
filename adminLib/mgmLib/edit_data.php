<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<!-- Header Start -->
<?php

define('TITLE', "Update Book");
include '../assets/layouts/header.php';

?>
<!-- Header End -->  

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

<!-- Here date picker library link start -->
    <!-- Ajax link here  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <!-- Here date picker library link end -->

<?php

// include_once 'includes/db.inc.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM admin_books WHERE Accession_No=$id");
while ($r0 = mysqli_fetch_array($result)) {
    $Accession_No = $r0[0];
    $Date = $r0[1];
    $Bill_No = $r0[2];
    $Amount = $r0[3];
    $Book_Name = $r0[4];
    $Author_Name = $r0[5];
    $Publisher_Name = $r0[6];
    $Place = $r0[7];
    $Edition = $r0[8];
    $Year = $r0[9];
    $Volume = $r0[10];
    $Pages = $r0[11];
    $Dept_Name = $r0[12];
}
?>


<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-normal text-muted  text-center">Update Book Details</h6>
</div>

<!-- Form Start Here -->
<div class="container d-flex flex-row justify-content-center">
    <form name="edit_data" action="editprocess.php" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select shadow" onsubmit="return Validate(event)">
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-4">
            <label class="form-label fs-5 fw-semibold">Accession No.: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 mb-2 text-uppercase text-danger" type="number" inputmode="numeric" name="accession_no" style="font-size: 1.2rem; font-weight: bold;" value="<?php echo $Accession_No ?>" readonly>
                </div> 

            <label class="form-label fs-5 fw-semibold">Date: <span class="text-danger">*</span></label>
                <div class="form-group mx-3 align-items-center flex-fill">
                    <input class="form-control w-100 mx-2 text-uppercase" type="date" name="current_date" value="<?php echo $Date ?>">
                    <div class="container d-flex flex-wrap text-danger" id="dateErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Bill No.: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 mb-2 text-uppercase" type="text" name="bill_no" placeholder="Enter Bill No. Here" autofocus value="<?php echo $Bill_No ?>">
                    <div class="container d-flex flex-wrap text-danger" id="billNoErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Book Price: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 mb-2 text-uppercase" type="number" inputmode="numeric" name="amount" placeholder="Enter the Book Price" value="<?php echo $Amount ?>">
                    <div class="container d-flex flex-wrap text-danger" id="amountErr"></div>
                </div>
            </fieldset>
                
            <fieldset class="form-group border p-3 mx-3">

                <label class="form-label fs-5 fw-semibold">Book Name: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control w-100 text-uppercase" type="text" name="book_name" placeholder="Enter The Name Of Book" value="<?php echo $Book_Name ?>">
                    <div class="container d-flex flex-wrap text-danger" id="bookNameErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Author Name: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="text" name="author_name" placeholder="Enter The Name Of Author" value="<?php echo $Author_Name ?>">
                    <div class="container d-flex flex-wrap text-danger" id="authorNameErr"></div>
                </div>
                
                <label class="form-label fs-5 fw-semibold">Publisher Name: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="text" name="pub_name" placeholder="Enter The Name Of Publisher" value="<?php echo $Publisher_Name ?>">
                    <div class="container d-flex flex-wrap text-danger" id="pubNameErr"></div>
                </div>  

                <label class="form-label fs-5 fw-semibold">Place: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="text" name="place" placeholder="Enter The Seller Location" value="<?php echo $Place ?>">
                    <div class="container d-flex flex-wrap text-danger" id="placeErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Edition: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="number" name="edition" placeholder="Enter The Edition of Book" value="<?php echo $Edition ?>">
                    <div class="container d-flex flex-wrap text-danger" id="editionErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Year: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" autocomplete="off" type="number" name="year" id="datepicker" readonly placeholder="Enter the Year Here" value="<?php echo $Year ?>">
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
                    <input class="form-control w-100 text-uppercase" type="number" name="volume" placeholder="Enter The Volume of Book" value="<?php echo $Volume ?>">
                    <div class="container d-flex flex-wrap text-danger" id="volumeErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Total Pages: <span class="text-danger">*</span></label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <input class="form-control w-100 text-uppercase" type="number" name="pages" placeholder="Enter The Total Pages of Book" value="<?php echo $Pages ?>">
                    <div class="container d-flex flex-wrap text-danger" id="pagesErr"></div>
                </div>

                <label class="form-label fs-5 fw-semibold">Department Name:</label>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <select class="form-control w-100 mb-1 text-uppercase" value="" name="Dept_Name">
                    <option value="" disabled selected>Select Your Department</option>
                        <option value="CSE"
                        <?php 
                            if($Dept_Name == 'CSE')
                                { echo "selected";} ?>
                        >Computer Science Engineering</option>
                        <option value="AE"
                        <?php 
                            if($Dept_Name == 'AE')
                                { echo "selected";} ?>
                        >Automobile Engineering</option>
                        <option value="CE"
                        <?php 
                            if($Dept_Name == 'CE')
                                { echo "selected";} ?>
                        >Civil Engineering</option>
                        <option value="ECE"
                        <?php 
                            if($Dept_Name == 'ECE')
                                { echo "selected";} ?>
                        >Electronics & Communication Engineering</option>
                        <option value="EE"
                        <?php 
                            if($Dept_Name == 'EE')
                                { echo "selected";} ?>
                        >Electrical Engineering</option>
                        <option value="ME"
                        <?php 
                            if($Dept_Name == 'ME')
                                { echo "selected";} ?>
                        >Mechanical Engineering</option>
                        <option value="AS"
                        <?php 
                            if($Dept_Name == 'AS')
                                { echo "selected";} ?>
                        >Applied Science</option>
                    </select>
                    <div class="container d-flex flex-wrap text-danger" id="deptErr"></div>
                </div>
            </fieldset>

        <div class="container d-flex justify-content-center">
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <td><input class="form-control btn btn-success mx-2 mb-4" type="submit" value="UPDATE" name="update"></td>
        </div>

    </form>
</div>
<!-- Update Form End Here -->

<!-- Form Validation Script Start -->
<script>
    var a = document.edit_data;
    
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
        
        if (a.current_date.value == "" || a.bill_no.value == "" || a.amount.value == "" || a.book_name.value == "" || a.author_name.value == "" || a.pub_name.value == "" || a.place.value == "" || a.edition.value == "" || a.year.value == "" || a.volume.value == "" || a.pages.value == "" || a.dept_name.selectedIndex == 0 ) {
            return false;
        }
    }
</script>
<!-- Form Validation Script End -->

<!-- Footer Start -->
<?php

// include '../assets/layouts/footer.php'

?>
<!-- Footer End -->