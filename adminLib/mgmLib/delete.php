<?php

include "includes/db.inc.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($con, "DELETE * FROM admin_books WHERE Accession_No = '$id'"); // delete query

if ($del) {
    mysqli_close($con); // Close connection
    echo "<script> window.location.href = '../'; </script>";  // redirects to all records page
    // header("location:view_books.php"); 
    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
