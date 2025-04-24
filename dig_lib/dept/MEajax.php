<?php

//Including Database configuration file.
include "includes/db.inc.php";

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {

    //Search box value assigning to $Name variable.
    $Book_Name = $_POST['search'];
    $Accession_No = $_POST['search'];

    //Search query
    $qry0 = "SELECT * FROM admin_books WHERE Book_Name LIKE '%$Book_Name%' AND Dept_name='ME' OR Accession_No LIKE '%$Accession_No%' AND Dept_name='ME'";

    $result0 = mysqli_query($conn, $qry0);
?>
    <div class='container text-bg-light shadow px-3 py-3 mb-4 bg-body rounded mt-4 scrollbar' style='overflow-x: scroll; overflow-y:scroll; max-height: 800px;'>
        <table class='table border'>
            <thead>
                <tr>
                    <th scope='col border'>Accession No.</th>
                    <th scope='col'>Book Name</th>
                    <th scope='col'>Author Name</th>
                    <th scope='col'>Publisher Name</th>
                    <th scope='col'>Edition</th>
                    <th scope='col'>Year</th>
                    <th scope='col'>Volume</th>
                    <th scope='col'>Pages</th>
                </tr>
            </thead>
        <?php
        while ($r0 = mysqli_fetch_array($result0)) {
            echo "<tr><td>$r0[0]</td>";
            echo "<td>$r0[4]</td>";
            echo "<td>$r0[5]</td>";
            echo "<td>$r0[6]</td>";
            echo "<td>$r0[8]</td>";
            echo "<td>$r0[9]</td>";
            echo "<td>$r0[10]</td>";
            echo "<td>$r0[11]</td>";
        }
    }
        ?>