<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<?php

define('TITLE', "Applied Science");
include '../assets/layouts/header.php';
check_verified()

?>


<style>
    /* Custom Scrollbar Start */
    ::-webkit-scrollbar {
        /* width of the entire scrollbar */
        width: 8px;
        height: 8px;
    }

    ::-webkit-scrollbar-track {
        /* color of the tracking area */
        background: grey;
    }

    ::-webkit-scrollbar-thumb {
        /* color of the scroll thumb */
        background-color: blue;
        /* roundness of the scroll thumb */
        border-radius: 15px;
    }

    /* Custom Scrollbar End */

    /* Custom Search Box Start */
    .active-pink-2 input.form-control[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #f48fb1;
        box-shadow: 0 1px 0 0 #f48fb1;
    }

    .active-pink input.form-control[type=text] {
        border-bottom: 1px solid #f48fb1;
        box-shadow: 0 1px 0 0 #f48fb1;
    }

    .active-purple-2 input.form-control[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #ce93d8;
        box-shadow: 0 1px 0 0 #ce93d8;
    }

    .active-purple input.form-control[type=text] {
        border-bottom: 1px solid #ce93d8;
        box-shadow: 0 1px 0 0 #ce93d8;
    }

    .active-cyan-2 input.form-control[type=text]:focus:not([readonly]) {
        border-bottom: 1px solid #4dd0e1;
        box-shadow: 0 1px 0 0 #4dd0e1;
    }

    .active-cyan input.form-control[type=text] {
        border-bottom: 1px solid #4dd0e1;
        box-shadow: 0 1px 0 0 #4dd0e1;
    }

    /* Custom Search Box End */
</style>



<!-- jQuery & AJAX CDN Link Start -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- jQuery & AJAX CDN Link End -->



<!-- Custom JS File Start -->
<script type="text/javascript" src="scriptAS.js"></script>
<!-- Custom JS File End -->



<!-- Search Box Start -->
<div class="container-fluid my-4">
    <h6 class="h2 mb-3 font-weight-normal text-muted text-center">View Books<br>(Applied Science Department)
    </h6>
</div>
<div class="container">
    <button type="button" class="text-right float-right btn btn-primary " data-toggle="modal" data-target="#searchAS">Search Books</button>
</div>
<div class="container mt-5 d-grid">
    <?php
    // Search Query
    $query = "SELECT * FROM admin_books WHERE Dept_name='AS'";

    // Query execution
    $EQuery = MySQLi_query($conn, $query);

    // Creating table to display result.
    echo "<div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2' style='overflow-x:auto;'>";
    echo "<table class='table'>";
    echo "<thead>
                    <tr>
                        <th scope='col border'>Date</th>
                        <th scope='col'>Accession No.</th>
                        <th scope='col'>Bill No.</th>
                        <th scope='col'>Book Price</th>
                        <th scope='col'>Book Name</th>
                        <th scope='col'>Author Name</th>
                        <th scope='col'>Publisher Name</th>
                        <th scope='col'>Place</th>
                        <th scope='col'>Edition</th>
                        <th scope='col'>Year</th>
                        <th scope='col'>Volume</th>
                        <th scope='col'>Total Pages</th>
                        <th scope='col'>Action</th>
                        <th scope='col'></th>
                    </tr>
                </thead>";
    //Fetching result from database

    while ($Result = MySQLi_fetch_array($EQuery)) {

        echo "<tr><td>$Result[Date]</td>";
        echo "<td>$Result[Accession_No]</td>";
        echo "<td>$Result[Bill_No]</td>";
        echo "<td>$Result[Price]</td>";
        echo "<td>$Result[Book_Name]</td>";
        echo "<td>$Result[Author_Name]</td>";
        echo "<td>$Result[Publisher_Name]</td>";
        echo "<td>$Result[Place]</td>";
        echo "<td>$Result[Edition]</td>";
        echo "<td>$Result[Year]</td>";
        echo "<td>$Result[Volume]</td>";
        echo "<td>$Result[Pages]</td>";
        echo "<td>"
    ?>
        <a href="includes/edit_data.php?id=<?php echo $Result[0]; ?>"><button type="button" class="btn btn-primary px-1 py-1 mb-1 w-100">Edit</button></a>
        <?php
        echo "</td>
                        <td>";
        ?>
        <a href="includes/delete.inc.php?id=<?php echo $Result[0]; ?>" onclick="DeleteConfirm()"><button type="button" class="btn btn-danger px-1 py-1 mb-1 w-100">Delete</button></a>
    <?php
        echo "</td>
                        </tr>
                        </div>";
    }
    ?>

    <div class="modal fade" id="searchAS" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Applied Science</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="md-form active-pink active-pink-2 mb-3 mt-3">
                        <input class="form-control" name="search" type="text" id="search" placeholder="Enter Book Name or Book Number" aria-label="Search" autofocus>
                    </div>
                    <br>
                    <!-- Suggestions will be displayed in below div. -->
                    <div id="display"></div>

                </div>
            </div>
        </div>
    </div>
    <?php

    include '../assets/layouts/footer.php'

    ?>