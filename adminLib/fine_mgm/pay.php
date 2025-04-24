<?php
include('connect.php');
$id=$_GET['invoice_id'];
$qry = "SELECT * FROM pay_fine WHERE Invoice_Id='$id'";
$data = mysqli_query($conn, $qry);
while (($res = mysqli_fetch_array($data))) {
  $Sr_no = $res[0];
  $S_Id = $res[1];
  $Invoice_Id=$res[18];
  $S_Name = $res[3];
  $Dept = $res[4];
  $Issue_Date = $res[6];
  $Due_Date = $res[7];
  $Return_Date = $res[8];
  $Accession_No = $res[9];
  $Fine=$res[16];
 
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <title>Payment Receipt</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }
    .container {
      background-color: #fff;
      padding: 30px;
      max-width: 600px;
      margin: 0 auto;
      /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); */
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      /* margin-bottom: 30px; */
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    .total {
      text-align: right;
      font-weight: bold;
    }
    .center {
  margin-left: auto;
  margin-right: auto;
}
.styled-table {
  border-collapse: collapse;
  margin: 10px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  margin-left: auto;
  margin-right: auto;
}

@media screen and (max-width: 600px) {
  .styled-table {
    font-size: 0.8em;
    min-width: auto;
  }
  .styled-table td, .styled-table th {
    padding: 8px 5px;
  }
}

  </style>
</head>
<body>
  <div class="container">
    <h1 align="center">Payment Receipt </h1>
    <table bgcolor="#FFFDD0" class="styled-table" border="1" cellspacing="0" cellpadding="5" align="center" >
      <tr>
        <th>Sr. No.:</th>
        <td><?php echo $Sr_no;?></td>
      </tr>
      <tr>
        <th>Student Id:</th>
        <td><?php echo $S_Id;?></td>
      </tr>
      <tr>
        <th>Invoice Number:</th>
        <td><?php echo $Invoice_Id;?></td>
      </tr>
      <tr>
        <th>Student Name:</th>
        <td><?php echo $S_Name;?></td>
      </tr>
      <tr>
        <th>Department:</th>
        <td><?php echo $Dept;?></td>
      </tr>
      <tr>
        <th>Issue Date:</th>
        <td><?php echo $Issue_Date;?></td>
      </tr>
      <tr>
        <th>Due Date:</th>
        <td><?php echo $Due_Date;?></td>
      </tr>
      <tr>
        <th>Return Date:</th>
        <td><?php echo $Return_Date;?></td>
      </tr>
      <tr>
        <th>Accession No:</th>
        <td><?php echo $Accession_No;?></td>
      </tr>
      <tr>
        <th>Fine:</th>
        <td><?php echo $Fine;?></td>
      </tr>
    </table>
  </div>
  <div class="container">
    <div class="text-center">
      <button type="button" id="print-btn"class="btn btn-light" style="width: 8rem; background-color: #FF4500; color: white;">Print</button>
    </div>
  </div>
  <script>
    // Get the print button element
    var printButton = document.getElementById("print-btn");
    
    // Add a click event listener to the print button
    printButton.addEventListener("click", function() {
      
      // Get the HTML content of the receipt
      var receipt = document.querySelector('.container').innerHTML;
      
      // Create a new window with the receipt content
      var w = window.open();
      w.document.write(receipt);
      
      // Print the receipt
      w.print();
      
      // Close the new window
      w.close();
    });
  </script>
</body>
</html>
