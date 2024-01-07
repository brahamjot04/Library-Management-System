<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">
<?php

define('TITLE', "Dashboard");
include '../assets/layouts/header.php';
check_verified();

?>

<body oncontextmenu="return false">

    <main role="main" class="container">


        <div class="ml-2 mr-2 d-flex align-items-center text-center p-3 mt-2 mb-3 text-white-50 bg-primary rounded box-shadow">
            <img class="mr-3" src="../assets/images/logo.png" alt="" width="60" height="60">
            <div class="lh-100 text-center">
                <h6 class="mb-0 text-white lh-100">Hey there, <?php echo $_SESSION['username']; ?></h6>
                <small>Last logged in at <?php echo date("m-d-Y", strtotime($_SESSION['last_login_at'])); ?></small>
            </div>
        </div>
        <!-- <div class="col-sm-3"> -->

        <!-- <?php
                // include('../assets/layouts/profile-card.php'); 
                ?> -->

        <!-- </div> -->

        <div class="col-sm-12">
            <div class="row justify-content-center row-cols-1">
                <div class="col my-3 p-3 bg-white rounded box-shadow card mx-2" style="width: 24rem;">
                    <h6 class="pb-3 border-bottom border-gray">Library Membership Form</h6>
                    <div class="media text-muted pt-3 card-body">
                        <p class="media-body pb-3 mb-0 small lh-125">
                            <a href="../membership_form/" style="text-decoration: none;"><b>Click Here To apply for Library Membership Card</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <hr class="mx-5">
    <main class="container" role="main">

        <div class="container mt-3 mb-5 py-3 border rounded-3 bg-white shadow">
            <div class="container-fluid">
                <h6 class="h2 fw-bold text-dark text-center">Issued Book Details</h6>
            </div>
            <?php

            // Storing the email in a variable
            $id1 = $_SESSION['email'];

            // Printing if the correct email is being fetched or not (for development purposes only)
            // echo $id1;

            // Fetching all data of student from issue book table using email
            $qry = "SELECT * FROM issue_book WHERE Email='$id1'";
            $data = mysqli_query($conn, $qry);

            // Executing a while loop to store all data in a variable
            while (($res = mysqli_fetch_array($data))) {
                // Student Deatils
                $S_Id = $res[0]; // Student Id
                $R_no = $res[1]; // Roll No.
                $S_name = $res[2]; // Student Name
                $Dept_Name = $res[3]; // Department Name
                $S_category = $res[4]; // Student Category 

                // Book Details
                $Issue_Date = $res[6]; // Book Issue Date
                $Due_Date = $res[7]; // Book Due Date
                $Accession_no = $res[8]; // Book Accession No.
                $Book_name = $res[9]; // Book Name
                $Author_name = $res[10]; // Book Author Name
                $Pub_name = $res[11]; // Publisher Name
                $Edition = $res[12]; // Book Edition
                $Year = $res[13]; // Book Year
                $Volume = $res[14]; // Book Volume
            }
            ?>

            <?php
            // Fetching data 
            $result = mysqli_query($conn, $qry);
            ?>

            <!-- Table Start -->
            <div class='container text-bg-white shadow px-3 py-3 mb-5 bg-body rounded  scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
                <table class='table border'>
                    <!-- Table Structure Start -->
                    <thead>
                        <tr>
                            <th scope='col border'>Student Id</th>
                            <th scope='col border'>Roll No</th>
                            <th scope='col border'>Student Name</th>
                            <th scope='col'>Dept Name</th>
                            <th scope='col'>Category</th>
                            <th scope='col'>Issued Date</th>
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
                    <!-- Table Structure End -->

                    <?php

                    while ($r0 = mysqli_fetch_array($result)) {

                    ?>
                        <tr>
                        <?php
                        echo "<td>$r0[0]</td>";
                        echo "<td>$r0[1]</td>";
                        echo "<td>$r0[2]</td>";
                        echo "<td>$r0[3]</td>";
                        echo "<td>$r0[4]</td>";
                        echo "<td>$r0[6]</td>";
                        echo "<td>$r0[7]</td>";
                        echo "<td>$r0[8]</td>";
                        echo "<td>$r0[9]</td>";
                        echo "<td>$r0[10]</td>";
                        echo "<td>$r0[11]</td>";
                        echo "<td>$r0[12]</td>";
                        echo "<td>$r0[13]</td>";
                        echo "<td>$r0[14]</td>";
                    }
                        ?>

                        </tr>
                </table>
                <!-- Table End -->
            </div>
        </div>
    </main>

    <?php

    include '../assets/layouts/footer.php'

    ?>
</body>