<link rel="icon" type="image/x-icon" href="../assets/images/logo.png">

<?php

define('TITLE', "Membership Form Requets");
include '../assets/layouts/header.php';
check_verified();

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
</style>


<body oncontextmenu="return false" class="prevent-select">

    <main role="main" class="container">

        <!-- <div class="row">
        <div class="col-sm-3">

            <?php
            // include('../assets/layouts/profile-card.php');
            ?>

        </div>
        <div class="col-sm-9"> -->

        <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-primary rounded box-shadow">
            <!-- <img class="mr-3" src="../assets/images/logonotextwhite.png" alt="" width="48" height="48"> -->
            <div class="lh-100">
                <h3 class="mb-0 text-white lh-100">Admin Panel</h3>
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Hey there, <?php echo $_SESSION['username']; ?></h6>
                    <small>Last logged in at <?php echo date("m-d-Y", strtotime($_SESSION['last_login_at'])); ?></small>
                </div>
                <!-- <small>[Development in Progress]</small> -->
            </div>
        </div>
        <?php
        echo '<h6 class="h3 mb-3 font-weight-normal text-muted text-center">Student Membership Form Requests</h6>';
        $qry1 = "SELECT * from library_membership_form";
        $result1 = mysqli_query($conn, $qry1);
        echo "<div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-5 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>";
        echo "<table class='table'>";
        echo "<thead>
                    <tr>
                    <th scope='col'>Student Profile</th>
                    <th scope='col'>Student Id</th>
                    <th scope='col'>Date</th>
                    <th scope='col'>Roll No.</th>
                    <th scope='col'>Registration No.</th>
                    <th scope='col'>Student Name</th>
                    <th scope='col'>Father Name</th>
                    <th scope='col'>Category</th>
                    <th scope='col'>Mobile Number</th>
                    <th scope='col'>Email Address</th>
                    <th scope='col'>Department</th>
                    <th scope='col'>Semester</th>
                    <th scope='col'>Academic Year</th>
                    <th scope='col'>Full Address</th>
                    </tr>
                </thead>";
        while ($r1 = mysqli_fetch_array($result1)) {

            echo "<tr><td><img src='../../StuWebPortal/images/users/" . $r1[13] . "' width='60px'></td>";
            echo "<td>$r1[14]</td>";
            echo "<td>$r1[1]</td>";
            echo "<td>$r1[8]</td>";
            echo "<td>$r1[9]</td>";
            echo "<td>$r1[2]</td>";
            echo "<td>$r1[3]</td>";
            echo "<td>$r1[11]</td>";
            echo "<td>$r1[4]</td>";
            echo "<td>$r1[10]</td>";
            echo "<td>$r1[5]</td>";
            echo "<td>$r1[6]</td>";
            echo "<td>$r1[7]</td>";
            echo "<td>$r1[12]</td>";
        }
        echo "</table>";
        echo "</div>";
        ?>
        </div>
        </div>
    </main>




    <?php

    include '../assets/layouts/footer.php'

    ?>