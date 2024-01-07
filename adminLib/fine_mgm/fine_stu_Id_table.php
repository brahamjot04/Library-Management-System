<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<!-- Header Start -->
<?php

define('TITLE', "Fine Details");
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


<?php
$id = $_GET['s_id'];
$query = "SELECT * FROM return_book WHERE Student_Id=$id";
$data = mysqli_query($conn, $query);
while ($res = mysqli_fetch_array($data)) {
    $Sr_no = $res[0];
    $S_Id = $res[1];
    $R_no = $res[2];
    $S_name = $res[3];
    $Dept_Name = $res[4];
    $S_category = $res[5];
    $Issue_Date = $res[6];
    $Due_Date = $res[7];
    $Return_Date = $res[8];
    $Accession_no = $res[9];
    $Book_name = $res[10];
    $Author_name = $res[11];
    $Pub_name = $res[12];
    $Edition = $res[13];
    $Year = $res[14];
    $Volume = $res[15];
    $fine = $res[16];
    $fine_status = $res[17];
}
?>

<!-- Main Heading Block -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Fine Details</h6>
</div>
<div class="container rounded shadow border">
    <div class="container d-grid">
        <!-- Pending Before this UI creation after books data is entered and A table is created name -->
        <?php
        // Search Query
        $qry0 = "SELECT * from return_book WHERE Student_Id=$id";

        $result0 = mysqli_query($conn, $qry0);
        ?>
        <div class='container text-bg-light shadow px-3 py-3 mb-4 bg-body rounded mt-4 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
            <table class='table border'>
                <thead>
                    <tr>
                        <th scope='col border'>Sr. No.</th>
                        <th scope='col'>Student Id</th>
                        <th scope='col'>Roll No.</th>
                        <th scope='col'>Student Name</th>
                        <th scope='col'>Department</th>
                        <th scope='col'>Category</th>
                        <th scope='col'>Issue Date</th>
                        <th scope='col'>Due Date</th>
                        <th scope='col'>Return Date</th>
                        <th scope='col'>Accession No.</th>
                        <th scope='col'>Book Name</th>
                        <th scope='col'>Author Name</th>
                        <th scope='col'>Publisher Name</th>
                        <th scope='col'>Edition</th>
                        <th scope='col'>Year</th>
                        <th scope='col'>Volume</th>
                        <th scope='col'>Fine</th>
                        <th scope='col'>Fine Status</th>
                        <th scope='col'>Fine Invoice Id</th>
                    </tr>
                </thead>

                <?php while ($r0 = mysqli_fetch_array($result0)) {

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
                    echo "<td>$r0[14]</td>";
                    echo "<td>$r0[15]</td>";
                    echo "<td>$r0[16]</td>";
                    echo "<td class='fw-bold' style='color:green;'>$r0[17]</td>";
                    echo "<td class='fw-bold' style='color:blue;'>$r0[18]</td>";
                }
                ?>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php

include '../assets/layouts/footer.php'

?>