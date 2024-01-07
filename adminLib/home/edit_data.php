<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<!-- Header Start -->
<?php

define('TITLE', "Update News");
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
$result = mysqli_query($conn, "SELECT * FROM lib_news WHERE sr_no=$id");
while ($r0 = mysqli_fetch_array($result)) {
    $Sr_No = $r0[0];
    $Date_Added = $r0[1];
    $Title = $r0[2];
    $Description = $r0[3];
}
?>


<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-normal text-muted  text-center">Update News Details</h6>
</div>

<!-- Form Start Here -->
<div class="container d-flex flex-row justify-content-center">
    <form name="edit_data" action="editprocess.php" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select shadow" onsubmit="return Validate(event)">
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-4">
            <label class="form-label fs-5 fw-semibold">Sr. No.: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                <input class="form-control w-100 mb-2 text-uppercase text-danger" type="number" inputmode="numeric" name="sr_no" style="font-size: 1.2rem; font-weight: bold;" value="<?php echo $Sr_No ?>" readonly>
            </div>

            <label class="form-label fs-5 fw-semibold">Date Added: <span class="text-danger">*</span></label>
            <div class="form-group mx-3 align-items-center flex-fill">
                <input class="form-control w-100 text-uppercase" type="date" name="date_added" value="<?php echo $Date_Added ?>">
                <div class="container d-flex flex-wrap text-danger" id="dateAddedErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">News Title: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                <input class="form-control w-100 mb-2 text-uppercase" type="text" name="title" placeholder="Enter the news title" autofocus value="<?php echo $Title ?>">
                <div class="container d-flex flex-wrap text-danger" id="titleErr"></div>
            </div>

            <label class="form-label fs-5 fw-semibold">News Description: <span class="text-danger">*</span></label>
            <div class="form-group mx-2 align-items-center flex-fill flex-column">
                <input class="form-control w-100 mb-2 text-uppercase" type="text" inputmode="numeric" name="description" placeholder="Enter the news description" value="<?php echo $Description ?>">
                <div class="container d-flex flex-wrap text-danger" id="descriptionErr"></div>
            </div>
        </fieldset>

        <div class="container d-flex justify-content-center">
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <td><input class="form-control btn btn-success mx-2 mb-4 w-25 shadow" type="submit" value="UPDATE" name="update"></td>
        </div>

    </form>
</div>
<!-- Update Form End Here -->

<!-- Form Validation Script Start -->
<script>
    var a = document.edit_data;

    function Validate(event) {
        if (a.title.value == "") {
            // alert('Enter Name');
            document.getElementById("titleErr").innerHTML = "News Title is missing!";
            event.preventDefault();
        } else {
            document.getElementById("titleErr").innerHTML = "";
        }

        if (a.description.value == "") {
            // alert('Enter Name');
            document.getElementById("descriptionErr").innerHTML = "News Description is missing!";
            event.preventDefault();
        } else {
            document.getElementById("descriptionErr").innerHTML = "";
        }


        if (a.title.value == "" || a.description.value == "") {
            return false;
        }
    }
</script>
<!-- Form Validation Script End -->

<!-- Footer Start -->
<?php

include '../assets/layouts/footer.php'

?>
<!-- Footer End -->