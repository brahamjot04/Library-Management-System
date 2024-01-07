<?php
include_once("includes/db.inc.php");
if (isset($_POST['submit'])) {

    $Roll_No = mysqli_real_escape_string($conn, $_POST['r_no']);
    $S_Name = mysqli_real_escape_string($conn, $_POST['s_name']);
    $Dept_Name = mysqli_real_escape_string($conn, $_POST['dept_name']);
    $Sem = mysqli_real_escape_string($conn, $_POST['sem']);
    $Category = mysqli_real_escape_string($conn, $_POST['category']);
    if (empty($Roll_No) || empty($S_Name) || empty($Dept_Name) || empty($Sem) || empty($Category)) {
        if (empty($Roll_No)) {
            echo '<font color="red">Book Name field is empty.</font><br>';
        }
        if (empty($S_Name)) {
            echo '<font color="red">Author Name field is empty.</font><br>';
        }
        if (empty($Dept_Name)) {
            echo '<font color="red">Publisher Name field is empty.</font><br>';
        }
        if (empty($Sem)) {
            echo '<font color="red">Date field is empty.</font><br>';
        }
        if (empty($Category)) {
            echo '<font color="red">Book No. field is empty.</font><br>';
        }
    } else {
        $r = "SELECT * FROM admin_books WHERE ";
        $result = mysqli_query($conn, $r);
        echo $r;

        echo "<script> window.location.href = 'view_books.php'; </script>";
        // header("Location: view_books.php");
    }
}
