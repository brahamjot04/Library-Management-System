<?php
require_once 'vendor/autoload.php';
include("includes/db.inc.php");
// error_reporting(0);

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if (isset($_POST['submit'])) {

    $file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

    if (isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);

        if ('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } elseif ('xls' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }

        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        if (!empty($sheetData)) {
            for ($i = 1; $i < count($sheetData); $i++) {
                $Accession_No = $sheetData[$i][0];
                $Date = $sheetData[$i][1];
                $Bill_No = $sheetData[$i][2];
                $Price = $sheetData[$i][3];
                $Book_Name = $sheetData[$i][4];
                $Author_Name = $sheetData[$i][5];
                $Publisher_Name = $sheetData[$i][6];
                $Place = $sheetData[$i][7];
                $Edition = $sheetData[$i][8];
                $Year = $sheetData[$i][9];
                $Volume = $sheetData[$i][10];
                $Pages = $sheetData[$i][11];
                $Dept_name = $sheetData[$i][12];
                $sql = "INSERT INTO `admin_books`(`Accession_No`, `Date`, `Bill_No`, `Price`, `Book_Name`, `Author_Name`, `Publisher_Name`, `Place`, `Edition`, `Year`, `Volume`, `Pages`, `Dept_name`) VALUES ('$Accession_No', '$Date', '$Bill_No', '$Price', '$Book_Name', '$Author_Name', '$Publisher_Name', '$Place', '$Edition', '$Year', '$Volume', '$Pages', '$Dept_name')";

                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('New Books data sucessfully stored');
                    window.location.href = 'index.php'</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    }
}
