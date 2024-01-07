<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">



<!-- Header Start -->
<?php

define('TITLE', "Returned Books");
include '../assets/layouts/header.php';
check_verified();
?>

<!-- Header End -->


<!-- Main Heading Block -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Returned Books Details</h6>
</div>
<!-- Pending Before this UI creation after books data is entered and A table is created name -->
<?php
$qry0 = "SELECT * from return_book";
$result0 = mysqli_query($conn, $qry0);
echo "<div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-5 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>";
echo "<table class='table border'>";
echo "<thead>
            <tr>
            <th scope='col border'>Roll No</th>
            <th scope='col border'>Student Name</th>
            <th scope='col'>Dept Name</th>
            <th scope='col'>Category</th>
            <th scope='col'>Issued Date</th>
            <th scope='col'>Due Date</th>
            <th scope='col'>Return Date</th>
            <th scope='col border'>Accession No</th>
            <th scope='col'>Book Name</th>
            <th scope='col'>Author Name</th>
            <th scope='col'>Publisher Name</th>
            <th scope='col'>Edition</th>
            <th scope='col'>Year</th>
            <th scope='col'>Volume</th>
            </tr>
        </thead>";
// $i=1;
while ($r0 = mysqli_fetch_array($result0)) {

    echo "<tr><td>$r0[0]</td>";
    echo "<td>$r0[1]</td>";
    echo "<td>$r0[2]</td>";
    echo "<td>$r0[3]</td>";
    echo "<td>$r0[4]</td>";
    echo "<td>$r0[5]</td>";
    echo "<td>$r0[6]</td>";
    echo "<td>$r0[7]</td>";
    echo "<td>$r0[8]</td>";
    echo "<td>$r0[9]</td>";
    echo "<td>$r0[10]</td>";
    echo "<td>$r0[11]</td>";
    echo "<td>$r0[12]</td>";
    echo "<td>$r0[13]</td>";
}
echo "</tr>
    </table>
    </div>";
?>
<?php

include '../assets/layouts/footer.php'

?>