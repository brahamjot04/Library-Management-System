<?php
include_once 'database.php';
if (isset($_POST['save'])) {
    $Accession_No = $sheetData[$i][0];
    $Date = $sheetData[$i][1];
    $Bill_No = $sheetData[$i][2];
    $Price = $sheetData[$i][3];
    $Book_Name = $sheetData[$i][4];
    $Author_Name = $sheetData[$i][5];
    $Publisher_Name = $sheetData[$i][6];
    $Place = $sheetData[$i][6];
    $Edition = $sheetData[$i][6];
    $Year = $sheetData[$i][6];
    $Volume = $sheetData[$i][6];
    $Pages = $sheetData[$i][6];
    $Dept_name = $sheetData[$i][6];
    $sql = "INSERT INTO `admin_books`(`Accession_No`, `Date`, `Bill_No`, `Price`, `Book_Name`, `Author_Name`, `Publisher_Name`, `Place`, `Edition`, `Year`, `Volume`, `Pages`, `Dept_name`) VALUES ('$Accession_No', '$Date', '$Bill_No', '$Price', '$Book_Name', '$Author_Name', '$Publisher_Name', '$Place', '$Edition', '$Year', '$Volume', '$Pages', '$Dept_name')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
