<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">


<?php

define('TITLE', "Admin Panel");
include '../assets/layouts/header.php';
check_verified();
error_reporting(0);

$qry = "SELECT sr_no FROM lib_news ORDER BY sr_no DESC";
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
$lastid = $row['sr_no'];
if (empty($lastid)) {
    $number = 1;
} else {
    $idd = ($lastid);
    $id = str_pad($idd + 1, 0, 0, STR_PAD_LEFT);
    $number = $id;
}

?>



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


<body oncontextmenu="return false">

    <main role="main" class="container">

        <div class="row row-cols justify-content-center">
            <div class="ml-2 mr-2 d-flex align-items-center text-center p-3 mt-2 mb-3 text-white-50 bg-primary rounded box-shadow">
                <img class="mr-3" src="../assets/images/logo.png" alt="" width="60" height="60">
                <div class="lh-100 text-center">
                    <h6 class="mb-0 text-white lh-100">Hey there, <?php echo $_SESSION['username']; ?></h6>
                    <small>Last logged in at <?php echo date("m-d-Y", strtotime($_SESSION['last_login_at'])); ?></small>
                </div>
            </div>
            <div class="col-sm-3">

                <?php include('../assets/layouts/profile-card.php'); ?>

            </div>

            <div class="col-sm-9">


                <div class="col row-cols">

                    <div class="row justify-content-center row-cols-1">

                        <!-- Membership Form Requests Start -->
                        <div class="col my-3 p-3 bg-white rounded shadow card mx-2" style="width: 24rem;">
                            <h6 class="pb-3 border-bottom border-gray">Membership Form Requests</h6>
                            <div class="media text-muted pt-3 card-body">
                                <p class="media-body mb-0 small lh-125">
                                    <a href="../memFormReq/" style="text-decoration: none;"><b>Click Here To View Details of Students Who Applied for Library Membership Card</b></a>
                                </p>
                            </div>
                        </div>
                        <!-- Membership Form Requests End -->

                        <!-- Manage Library Start -->
                        <div class="col my-3 px-3 pt-3 bg-white rounded shadow card mx-2" style="width: 24rem;">
                            <h6 class="pb-3 border-bottom text-dark border-gray">Manage Library</h6>
                            <div class="media text-muted pt-3 card-body">
                                <p class="media-body mb-0 small lh-125">
                                    <a href="../mgmLib/" style="text-decoration: none;"><b>Click Here To Manage All Books</b></a>
                                </p>
                            </div>
                        </div>
                        <!-- Manage Library End -->

                        <!-- News Section Start -->
                        <div class="col my-3 px-3 pt-3 bg-white rounded shadow card mx-2" style="width: 24rem;">
                            <h6 class="pb-3 border-bottom text-dark border-gray">News Section</h6>
                            <div class="media text-muted pt-3 card-body">
                                <div class="media-body mb-0 small lh-125">
                                    <a href="#" style="text-decoration: none;">
                                        <button type="button" class="btn btn-primary mb-2" style="width: 20rem;" data-toggle="modal" data-target="#NewsModal">Add News</button>
                                    </a>
                                    <a href="#" style="text-decoration: none;">
                                        <button type="button" class="btn btn-success" style="width: 20rem;" data-toggle="modal" data-target="#AllNewsModal">View All News</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- News Section End -->

                        <!-- Bulk data Upload Start -->
                        <div class="col my-3 px-3 pt-3 bg-white rounded shadow card mx-2" style="width: 24rem;">
                            <h6 class="pb-3 border-bottom text-dark border-gray">Upload Books</h6>
                            <div class="media text-muted pt-3 card-body">
                                <p class="media-body mb-0 small lh-125">
                                    <a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#BulkBookModal"><b>Click Here To Upload Books in Bulk</b></a>
                                </p>
                            </div>
                        </div>
                        <!-- Bulk Data Upload End -->
                    </div>

                    <!-- Contact Us Page Start -->
                    <!-- <div class="col my-3 px-3 pt-3 bg-white rounded shadow card mx-2" style="width: 24rem;">
                        <h6 class="pb-3 border-bottom text-dark border-gray">Student Queries</h6>
                        <div class="media text-muted pt-3 card-body">
                            <p class="media-body mb-0 small lh-125">
                                <a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#StuQueryModal"><b>Click Here To View Student Queries</b></a>
                            </p>
                        </div>
                    </div> -->
                    <!-- Contact Us Page End -->


                </div>
            </div>
        </div>


        <!-- News Form Modal Start -->
        <div id="NewsModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Modal content-->
                <div class="modal-content project-details-popup">
                    <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
                    <form name="newsPrompt" method="POST" onsubmit="return news_Validate()">
                        <div class="modal-body">
                            <fieldset class="form-group border px-3 pt-3 mx-3 mt-3">
                                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                    <label class="form-label fw-semibold">Date:</label>
                                    <input class="form-control form-control w-100 text-uppercase" type="date" name="date" value="<?php echo date("Y-m-d") ?>">
                                    <div id="dateErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                                </div>
                                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                    <label class="form-label fw-semibold">Sr. No.:</label>
                                    <input class="text-danger form-control form-control w-100 text-uppercase" type="text" inputmode="numeric" name="sr_no" placeholder="Enter Sr. No. Here" value="<?php echo $number ?>" readonly>
                                    <div id="srNoErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                                </div>
                                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                    <label class="form-label fw-semibold">News Title: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control w-100 text-uppercase" type="text" inputmode="numeric" name="title" placeholder="Enter the News Title Here">
                                    <div id="titleErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
                                </div>
                                <div class="form-group mx-2 align-items-center flex-fill flex-column">
                                    <label class="form-label fw-semibold">News Description: <span class="text-danger">*</span></label>
                                    <input class="form-control form-control w-100 text-uppercase" type="text" name="description" placeholder="Enter the News Description Here">
                                    <div id="descriptionErr" class="container d-flex flex-wrap flex-wrap text-danger"></div>
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
        <!-- News Form Modal End -->

        <!-- All News Form Modal Start -->
        <div id="AllNewsModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-xl">

                <!-- Modal content-->
                <div class="modal-content project-details-popup">
                    <div class="modal-header">
                        <h5 class="modal-title">All News</h5>
                        <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <?php
                        $q = "SELECT * FROM lib_news";
                        $res = mysqli_query($conn, $q);
                        ?>
                        <div class="container text-bg-light shadow-p-3 my-5 bg-body rounded scrollbar" style="overflow-x:scroll; overflow-y:scroll; max-height:500px;">
                            <table class="table border">
                                <thead>
                                    <tr>
                                        <th scope="col border">Sr. No.</th>
                                        <th scope="col">Date Added</th>
                                        <th scope="col">News Title</th>
                                        <th scope="col">News Description</th>
                                        <th scope="col">Action</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($r = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<td>$r[0]</td>";
                                        echo "<td>$r[1]</td>";
                                        echo "<td>$r[2]</td>";
                                        echo "<td>$r[3]</td>";
                                    ?>
                                        <td>
                                            <a href="edit_data.php?id=<?php echo $r[0]; ?>" onclick="UpdateConfirm()"><button type="button" class="btn btn-primary px-1 py-1 mb-1 w-100">Edit</button></a>
                                        </td>
                                        <td>
                                            <a href="delete.inc.php?id=<?php echo $r[0]; ?>" onclick="DeleteConfirm()"><button type="button" class="btn btn-danger px-1 py-1 mb-1 w-100">Delete</button></a>
                                        </td>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All News Form Modal End -->

        <!-- Import Bulk Books Modal Start -->
        <div id="BulkBookModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Modal content-->
                <div class="modal-content project-details-popup">
                    <button type="button" class="close text-right mr-2" data-dismiss="modal">&times;</button>
                    <div class="modal-body">
                        <form name="newsPrompt" method="POST" action="import.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputFile">File Upload</label>
                                <input type="file" name="file" class="form-control" id="exampleInputFile">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Import Bulk Books Modal End -->

        <!-- All News Form Modal Start -->
        <div id="StuQueryModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-xl">

                <!-- Modal content-->
                <div class="modal-content project-details-popup">
                    <div class="modal-header">
                        <h5 class="modal-title">Student Queries</h5>
                        <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <?php
                        $q = "SELECT * FROM stu_contact";
                        $res = mysqli_query($conn, $q);
                        ?>
                        <div class="container text-bg-light shadow-p-3 my-5 bg-body rounded scrollbar" style="overflow-x:scroll; overflow-y:scroll; max-height:500px;">
                            <table class="table border">
                                <thead>
                                    <tr>
                                        <th scope="col border">Sr. No.</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($r = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<td>$r[0]</td>";
                                        echo "<td>$r[1]</td>";
                                        echo "<td>$r[2]</td>";
                                        echo "<td>$r[3]</td>";
                                        echo "<td>$r[4]</td>";
                                        echo "<td>$r[5]</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All News Form Modal End -->

        <script>
            function DeleteConfirm() {
                alert("News has been deleted!");
            }
        </script>

        <!-- php code for newsModel start here -->
        <?php
        if (isset($_POST['submit'])) {
            $Sr_No = $_POST['sr_no'];
            $Title = $_POST['title'];
            $Description = $_POST['description'];
            $Date = $_POST['date'];
            $qry = "INSERT into lib_news values('$Sr_No','$Title','$Description','$Date')";
            $result = mysqli_query($conn, $qry);
            if (isset($result)) {
                echo "<script> alert('Your data is Successfully entered!'); </script>";
            } else {
                echo "<script> alert('Your data can't be entered!'); </script>";
            }
        }
        ?>
        <!-- php code for newsModel end here -->

        <!-- Modal Validation Start -->
        <script>
            // News Detail Form Modal Validation Start Here
            var c = document.newsPrompt;

            function news_Validate() {
                if (c.title.value == "") {
                    // alert('Enter Name');
                    document.getElementById("titleErr").innerHTML = "News Title is missing!";
                    event.preventDefault();
                } else {
                    document.getElementById("titleErr").innerHTML = "";
                }
                if (c.description.value == "") {
                    // alert('Enter Name');
                    document.getElementById("descriptionErr").innerHTML = "News Description is missing!";
                    event.preventDefault();
                } else {
                    document.getElementById("descriptionErr").innerHTML = "";
                }
                if (c.title.value == "" || c.description.value == "") {
                    return false;
                }
            }
            // News Detail Form Modal Validation End Here
        </script>
        <!-- Modal Validation End -->
        </div>
    </main>



    <?php

    include '../assets/layouts/footer.php'

    ?>