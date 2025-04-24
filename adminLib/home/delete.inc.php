<?php
$id = $_GET['id'];
echo $id;
?>
<?php
require 'includes/db.inc.php';
$id = $_GET['id'];
$query = "DELETE FROM lib_news WHERE sr_no = '$id';";
$result = mysqli_query($conn, $query);
if ($result) {
    mysqli_close($conn);
    echo "<script> window.location.href = '../view_books.php'; </script>";
    // header("location: view_books.php");
    exit();
} else {
    echo "Error deleting record";
}
?>