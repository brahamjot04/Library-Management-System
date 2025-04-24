<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<?php
include_once 'db.inc.php';
$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM admin_books WHERE Book_No=$id");
while ($r0 = mysqli_fetch_array($result)) {
    $Book_No = $r0[0];
    $Date = $r0[1];
    $Book_Name = $r0[2];
    $Author_Name = $r0[3];
    $Publisher_Name = $r0[4];
    $Dept_Name = $r0[5];
}
?>


<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-normal text-muted  text-center">Update Book Details</h6>
</div>

<!-- Form Start Here -->
<div class="container d-flex flex-row justify-content-center">
    <form action="editprocess.php" method="post" enctype="multipart/form-data" class="border border-body border-1 mx-5 my-2 w-75 prevent-select">
        <fieldset class="form-group border px-3 pt-3 mx-3 mt-4">
            <div class="container  d-flex flex-wrap flex-row">
                <label class="form-label fw-semibold">Book No.:</label>
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <input class="form-control form-control-sm w-100 mb-2" type="number" inputmode="numeric" name="book_no" value="<?php echo $Book_No ?>" placeholder="Enter Book No. Here" required autofocus>
                </div>
                <label class="form-label fw-semibold">Date:</label>
                <div class="form-group mx-3 align-items-center flex-fill">
                    <input class="form-control form-control-sm w-100 mx-2" type="date" name="current_date" value="<?php echo $Date ?>" required>
                </div>
            </div>
        </fieldset>

        <fieldset class="form-group border p-3 mx-3">
            <div class="container d-flex flex-wrap flex-row">
                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                    <label class="form-label fs-5 fw-semibold">Book Name:</label>
                    <input class="form-control w-100" type="text" name="book_name" placeholder="Enter The Name Of Book" value="<?php echo $Book_Name ?>" required>
                </div>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <label class="form-label fs-5 fw-semibold">Author Name:</label>
                    <input class="form-control w-100" type="text" name="author_name" placeholder="Enter The Name Of Author" value="<?php echo $Author_Name ?>" required>
                </div>
            </div>
            <div class="container d-flex flex-wrap flex-row">
                <div class="form-group mx-2 align-items-center flex-fill">
                    <label class="form-label fs-5 fw-semibold">Publisher Name:</label>
                    <input class="form-control w-100" type="text" name="pub_name" placeholder="Enter The Name Of Publisher" value="<?php echo $Publisher_Name ?>" required>
                </div>
                <div class="form-group mx-2 align-items-center flex-fill">
                    <label class="form-label fs-5 fw-semibold">Department Name:</label>
                    <select class="form-control w-100 mb-1" value="<?php echo $Dept_Name; ?>" name="Dept_Name">
                        <option value="Computer Science Engineering">Select Your Department</option>
                        <option value="Computer Science Engineering">Computer Science Engineering</option>
                        <option value="Automobile Engineering">Automobile Engineering</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Applied Science Department">Applied Science Department</option>
                    </select>
                </div>
            </div>
        </fieldset>
        <br>

        <div class="container d-flex justify-content-center">
            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
            <td><input class="form-control btn btn-success mx-2 mb-4" type="submit" value="UPDATE" name="update"></td>
        </div>

    </form>
</div>



<?php
// if (array_key_exists('update', $_POST)) {
//     UpdateRecord();
// }
// function UpdateRecord()
// {
// require 'db.inc.php';
// $query = "UPDATE admin_books SET `Date`='$Date',`Book_Name`='$Book_Name',`Author_Name`='$Author_Name',`Publisher_Name`='$Publisher_Name',`Dept_name`='$Dept_Name' WHERE Book_No = '$id';";
// $result = mysqli_query($con, $query);
// if ($result) {
//     mysqli_close($con);
//     header("location: ../view_books.php");
//     exit();
// } else {
//     echo "Error updating record";
// }
// }
?>