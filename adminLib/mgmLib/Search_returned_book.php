<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<?php

?>

<!-- Header Start -->
<?php
define('TITLE', "View Returned Books");
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
$id3 = $_GET['from_date'];  # this is for from date in input type
$id4 = $_GET['to_date'];    # this is for to date in input type
?>

<!-- Main Heading Block -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center"> Search Returned Books</h6>
</div>


<div class="container d-grid">
    <form action="Search_returned_book.php" name="searchReturnedPrompt" method="GET" onsubmit="return searchReturnedValidate()">
        <div class="row row-cols-auto modal-body">
            <div class="col">
                <label class="form-label fw-bold mx-2">From Date:</label>
                <input class="form-control form-control-sm w-100 text-uppercase" type="date" name="from_date" style="color:red;" id='fromDate' value="<?php echo $id3; ?>" readonly>
            </div>
            <div class="col">
                <label class="form-label fw-bold mx-2">To Date:</label>
                <input class="form-control form-control-sm w-100 text-uppercase" type="date" name="to_date" id="toDate" style="color:red;" value="<?php echo $id4; ?>" readonly>
            </div>
        </div>
    </form>
    <!-- Pending Before this UI creation after books data is entered and A table is created name -->
    <?php
    // Search Query

    // echo $id ;
    $id = $_GET['from_date'];
    $id2 = $_GET['to_date'];
    $qry0 = "SELECT * from Return_book  where Return_Date BETWEEN '$id' and '$id2'";
    ?>
    <?php
    $result0 = mysqli_query($conn, $qry0);
    ?>
    <div class='container text-bg-light shadow px-3 mb-4 bg-body rounded scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
        <table class='table border mt-3'>
            <thead>
                <tr>
                    <th scope='col border'>Sr. No.</th>
                    <th scope='col border'>Student Id</th>
                    <th scope='col border'>Roll No.</th>
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
                    <th scope='col'>Fine Type</th>
                    <th scope='col'>Invoice Id</th>
                </tr>
            </thead>
            <?php while ($r0 = mysqli_fetch_array($result0)) {
            ?>
                <tr>
                <?php
                echo "<td>$r0[0]</td>";
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
                echo "<td>$r0[17]</td>";
                echo "<td>$r0[18]</td>";
            } ?>
                </tr>
        </table>
    </div>
</div>
</div>
<script>
    function DeleteConfirm() {
        alert("Your book data has been deleted!");
    }
</script>
<?php

include '../assets/layouts/footer.php'

?>