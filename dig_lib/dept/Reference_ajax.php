<?php

//Including Database configuration file.
include "includes/db.inc.php";

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {

    //Search box value assigning to $Name variable.
    $Book_Name = $_POST['search'];
    $Accession_No = $_POST['search'];

    //Search query
    $Query = "SELECT * FROM admin_books WHERE Book_Name LIKE '%$Book_Name%' AND Dept_name='ME' OR Accession_No LIKE '%$Accession_No%' AND Dept_name='Reference'";

    //Query execution
    $ExecQuery = MySQLi_query($con, $Query);

    //Creating table to display result.
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
    while ($Result = MySQLi_fetch_array($ExecQuery)) {
        // Displaying values in table
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
        
        ?>
        </tr>
        </div>";

        <script>
            function DeleteConfirm() {
                alert("Your book data has been deleted!");
            }
        </script>
<?php
    }
}
?>