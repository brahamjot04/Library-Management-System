<?php
include_once("includes/db.inc.php");
if (isset($_POST['update'])) {

    $Accession_No = mysqli_real_escape_string($conn, $_POST['accession_no']);
    $Date = mysqli_real_escape_string($conn, $_POST['current_date']);
    $Bill_No = mysqli_real_escape_string($conn, $_POST['bill_no']);
    $Amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $Book_Name = mysqli_real_escape_string($conn, $_POST['book_name']);
    $Author_Name = mysqli_real_escape_string($conn, $_POST['author_name']);
    $Publisher_Name = mysqli_real_escape_string($conn, $_POST['pub_name']);
    $Place = mysqli_real_escape_string($conn, $_POST['place']);
    $Edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $Year = mysqli_real_escape_string($conn, $_POST['year']);
    $Volume = mysqli_real_escape_string($conn, $_POST['volume']);
    $Pages = mysqli_real_escape_string($conn, $_POST['pages']);
    $Dept_Name = mysqli_real_escape_string($conn, $_POST['Dept_Name']);
    if (!empty($Accession_No) && !empty($Date) && !empty($Bill_No) && !empty($Amount) && !empty($Book_Name) && !empty($Author_Name) && !empty($Publisher_Name) && !empty($Place) && !empty($Edition) && !empty($Year) && !empty($Volume) && !empty($Pages) && !empty($Dept_Name)) {

        $result = mysqli_query($conn, "UPDATE admin_books SET Book_Name='$Book_Name',Date='$Date',Author_Name='$Author_Name',Publisher_Name='$Publisher_Name',Dept_name='$Dept_Name' WHERE Accession_No=$Accession_No");

        echo "<script> window.location.href = 'view_books.php'; </script>";
        // header("Location: view_books.php");
    }
}
