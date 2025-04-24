<?php
include_once("db.inc.php");
if (isset($_POST['update'])) {

    $Book_No = mysqli_real_escape_string($con, $_POST['book_no']);
    $Date = mysqli_real_escape_string($con, $_POST['current_date']);
    $Book_Name = mysqli_real_escape_string($con, $_POST['book_name']);
    $Author_Name = mysqli_real_escape_string($con, $_POST['author_name']);
    $Publisher_Name = mysqli_real_escape_string($con, $_POST['pub_name']);
    $Dept_Name = mysqli_real_escape_string($con, $_POST['Dept_Name']);
    if (empty($Book_Name) || empty($Author_Name) || empty($Publisher_Name) || empty($Date) || empty($Book_No)) {
        if (empty($Book_Name)) {
            echo '<font color="red">Book Name field is empty.</font><br>';
        }
        if (empty($Author_Name)) {
            echo '<font color="red">Author Name field is empty.</font><br>';
        }
        if (empty($Publisher_Name)) {
            echo '<font color="red">Publisher Name field is empty.</font><br>';
        }
        if (empty($Date)) {
            echo '<font color="red">Date field is empty.</font><br>';
        }
        if (empty($Book_No)) {
            echo '<font color="red">Book No. field is empty.</font><br>';
        }
    } else {
        $result = mysqli_query($con, "UPDATE admin_books SET Book_Name='$Book_Name',Book_No='$Book_No',Date='$Date',Author_Name='$Author_Name',Publisher_Name='$Publisher_Name',Dept_name='$Dept_Name' WHERE Book_No=$Book_No");
        echo "<script> window.location.href = '../view_books.php'; </script>";
        // header("Location: ../view_books.php");
    }
}
