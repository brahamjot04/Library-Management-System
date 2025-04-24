<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">



<!-- Header Start -->
<?php

define('TITLE', "View Books");
include '../assets/layouts/header.php';
check_verified();

?>
<!-- Header End -->


<style>
    .prevent-select {
        -webkit-user-select: none;
        /* Safari */
        -ms-user-select: none;
        /* IE 10 and IE 11 */
        user-select: none;
        /* Standard syntax */
    }

    ::-webkit-scrollbar {
        width: 8px;
        height: 8px;
        /* width of the entire scrollbar */
    }

    ::-webkit-scrollbar-track {
        background: grey;
        /* color of the tracking area */
    }

    ::-webkit-scrollbar-thumb {
        background-color: blue;
        /* color of the scroll thumb */
        border-radius: 15px;
        /* roundness of the scroll thumb */
    }

    /* table.table tbody tr td,
    table.table thead tr th,
    table.table thead {
    border-left: 1px solid gray;
    border-right: 1px solid gray;
    } */
</style>

<!-- Main Heading Block -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Issued Books</h6>
</div>
<!-- Pending Before this UI creation after books data is entered and A table is created name -->
<?php
$qry0 = "SELECT * from issue_book ";
$result0 = mysqli_query($conn, $qry0);
?>
<div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-5 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
    <table class='table border'>
        <thead>
            <tr>
                <th scope='col border'>Student Id</th>
                <th scope='col'>Roll No.</th>
                <th scope='col'>Student Name</th>
                <th scope='col'>Dept</th>
                <th scope='col'>Category</th>
                <th scope='col'>Issue Date</th>
                <th scope='col'>Due Date</th>
                <th scope='col'>Accession No</th>
                <th scope='col'>Book Name</th>
                <th scope='col'>Author Name</th>
                <th scope='col'>Publisher Name</th>
                <th scope='col'>Edition</th>
                <th scope='col'>Year</th>
                <th scope='col'>Volume</th>
            </tr>
        </thead>
        <?php
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
        } ?>

        </tr>
    </table>
</div>
<?php

include '../assets/layouts/footer.php'

?>