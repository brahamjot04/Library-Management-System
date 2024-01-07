<?php
//Including Database configuration file.
include "includes/db.inc.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
    $Book_Name = $_POST['search'];
    $Book_No = $_POST['search'];
    //Search query.
    $Query = "SELECT * FROM admin_books WHERE Book_Name LIKE '%$Book_Name%' OR Accession_No LIKE '%$Book_No%'";
    //Query execution
    $ExecQuery = MySQLi_query($conn, $Query);
    //Creating unordered list to display result.
    echo '
<ul>
   ';
    echo "<div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2' style='overflow-x:auto;'>";
    echo "<table class='table'>";
    echo "<thead>
            <tr>
            <th scope='col'>Accession No </th>
            <th scope='col'>Date Added</th>
            <th scope='col'>Book Name</th>
            <th scope='col'>Author Name</th>
            <th scope='col'>Publisher Name</th>
            <th scope='col'>Department Name</th>
            <th scope='col'>Action</th>
            <th scope='col'></th>
            </tr>
        </thead>";
    //Fetching result from database.
    while ($Result = MySQLi_fetch_array($ExecQuery)) {

        echo "<tr><td>$Result[Accession_No]</td>";
        echo "<td>$Result[Date]</td>";
        echo "<td>$Result[Book_Name]</td>";
        echo "<td>$Result[Author_Name]</td>";
        echo "<td>$Result[Publisher_Name]</td>";
        echo "<td>$Result[Dept_name]</td>";
        echo "<td>" ?>
        <a href="../mgmLib/edit_data.php?id=<?php echo $Result[0]; ?>"><button type="button" class="btn btn-primary px-1 py-1 mb-1 w-100">Edit</button></a>
        <?php echo "</td>
        <td>"; ?>
        <a href="../mgmLib/delete.inc.php?id=<?php echo $Result[0]; ?>" onclick="DeleteConfirm()"><button type="button" class="btn btn-danger px-1 py-1 mb-1 w-100">Delete</button></a>
        <?php echo "</td>
        </tr>
        </div>";
        ?>

        <script>
            function DeleteConfirm() {
                alert("Your book data has been deleted!");
            }
        </script>
        <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->

        <!-- <li onclick='fill("<?php
                                // echo $Result['Book_Name']; 
                                ?>")'>
            <a> -->
        <!-- Assigning searched result in "Search box" in "search.php" file. -->
        <?php
        // echo $Result['Book_Name']; 
        ?>
        <!-- </li></a> -->
        <!-- Below php code is just for closing parenthesis. Don't be confused. -->
<?php
    }
}
?>
</ul>