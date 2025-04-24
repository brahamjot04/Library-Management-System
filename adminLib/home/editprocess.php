<?php
include_once("includes/db.inc.php");
if (isset($_POST['update'])) {

    $Sr_No = mysqli_real_escape_string($conn, $_POST['sr_no']);
    $Date_Added = mysqli_real_escape_string($conn, $_POST['date_added']);
    $Title = mysqli_real_escape_string($conn, $_POST['title']);
    $Description = mysqli_real_escape_string($conn, $_POST['description']);
    if (!empty($Sr_No) && !empty($Date_Added) && !empty($Title) && !empty($Description)) {

        $result = mysqli_query($conn, "UPDATE lib_news SET date='$Date_Added', title='$Title',description='$Description' WHERE sr_no='$Sr_No';");

        echo "<script> window.location.href = 'index.php'; </script>";
        // header("Location: index.php");
    }
}
