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
    <h6 class="h2 mb-3 font-weight-bold text-dark text-center">Returned Books</h6>
</div>
<div class="container rounded shadow border">
    <div class="container mt-4 shadow">
        <button type="button" class="text-right float-right btn btn-primary shadow" data-toggle="modal" data-target="#myModal">Search Books</button>
    </div>
    <div class="container d-grid">
        <!-- Pending Before this UI creation after books data is entered and A table is created name -->
        <?php
        // Search Query
        $qry0 = "SELECT * from return_book ";

        $result0 = mysqli_query($conn, $qry0);
        ?>
        <div class='container text-bg-light shadow px-3 py-3 mb-4 bg-body rounded mt-4 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
            <table class='table border'>
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
                    echo "<td>$r0[17]</td>";
                    echo "<td>$r0[18]</td>";
                }
                ?>
                </tr>
            </table>
        </div>
    </div>
</div>
<!-- Modal1 Start Here-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content project-details-popup">
            <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
            <form action="Search_returned_book.php" name="searchReturnedPrompt" method="GET" onsubmit="return searchReturnedValidate()">
                <div class="modal-body">
                    <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                        <div class="form-group mx-2 align-items-center flex-fill flex-column">
                            <label class="form-label fw-bold">From Date:</label>
                            <input class="form-control form-control w-100 text-uppercase" type="date" name="from_date" id='fromDate'>
                            <div id="fromDateErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                        </div>
                        <div class="form-group mx-2 align-items-center flex-fill flex-column">
                            <label class="form-label fw-bold">To Date:</label>
                            <input class="form-control form-control w-100 text-uppercase" type="date" name="to_date" id="toDate">
                            <div id="toDateErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                        </div>
                        <div class="container d-flex justify-content-center">
                            <td><button class="form-control btn btn-success mx-2 mb-4 w-25" type="submit" name="submit">SUBMIT</button></td>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal1 End Here-->

<!-- Form Validation Script Start -->
<script>
    var a = document.searchReturnedPrompt;
    const fromDate = document.getElementById('fromDate');
    const toDate = document.getElementById('toDate');

    function searchReturnedValidate() {
        if (fromDate.value === '' || fromDate.value === null) {
            // alert('Enter Roll No.');
            document.getElementById("fromDateErr").innerHTML = "From Date is missing!";
            event.preventDefault();
        } else {
            document.getElementById("fromDateErr").innerHTML = "";
        }

        if (toDate.value === '' || toDate.value === null) {
            // alert('Enter Roll No.');
            document.getElementById("toDateErr").innerHTML = "To Date is missing!";
            event.preventDefault();
        } else {
            document.getElementById("toDateErr").innerHTML = "";
        }
    }
</script>
<!-- Form Validation Script End -->

<?php

include '../assets/layouts/footer.php'

?>