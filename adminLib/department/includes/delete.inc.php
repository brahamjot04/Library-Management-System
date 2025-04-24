<?php
$id = $_GET['id'];
echo $id;
?>
<?php
require 'db.inc.php';
$id = $_GET['id'];
$query = "DELETE FROM admin_books WHERE Book_No = '$id';";
$result = mysqli_query($con, $query);
if ($result) {
    mysqli_close($con);
    echo "<script> window.location.href = '../view_books.php'; </script>";
    // header("location: ../view_books.php");
    exit();
} else {
    echo "Error deleting record";
}
?>