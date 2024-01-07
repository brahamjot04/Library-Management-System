<!DOCTYPE html>
<html lang="en">

<body oncontextmenu="return false" class="prevent-select">
  <?php
  // include 'header.php';
  // $dis = $_GET['library'];
  ?>
  <!-- <h1 class="h1 text-primary my-3 text-center">Library Book Details</h1> -->
  <!-- Connection to Database Start -->
  <?php
  // $hostname = "162.241.218.223";
  // $Username = "gndpolyo_admin";
  // $pass = "qwerty@1234";
  // $databaseName = "gndpolyo_web";
  $hostname1 = "localhost";
  $Username1 = "root";
  $pass1 = "";
  $databaseName1 = "gndpolyo_web";
  $conn = mysqli_connect($hostname1, $Username1, $pass1, $databaseName1);
  // $conn = mysqli_connect($hostname, $Username, $pass, $databaseName);
  ?>
  <!-- Connection to Database End -->
  <!-- <div class="container text-bg-light shadow px-3 bg-body mb-3 rounded mt-2 border"> -->

  <?php
  $qry0 = "SELECT * from total_book";
  $result0 = mysqli_query($conn, $qry0);
  ?>
  <div class="row g-3">
    <div class="col-lg-6">
      <!-- Table1-> Total Books Start Here ----------- -->
      <h6 class="h4 font-weight-normal text-muted text-center">Total Books</h6>
      <div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2 border'>
        <table class='table'>
          <thead class='bg-primary text-white shadow'>
            <tr>
              <th scope='col'>Sr.No.</th>
              <th scope='col'>Total No. of Books</th>
              <th scope='col'>Total</th>
            </tr>
          </thead>
          <?php
          while ($r0 = mysqli_fetch_array($result0)) {

            echo "<tr>
            <td>$r0[0]</td>";
            echo "<td>$r0[1]</td>";
            echo "<td>$r0[2]</td>
          </tr>";
            // $i++;
          } ?>
        </table>
      </div>
      <!-- Table1-> Total Books End Here ----------- -->
    </div>
    <div class="col-lg-6">

      <h6 class="h4 font-weight-normal text-muted text-center">Total Books Department Wise</h6>
      <?php
      //Table2-> Branch Wise Books Start Here -----------
      $qry1 = "SELECT * from branch_wise_book";
      $result1 = mysqli_query($conn, $qry1); ?>

      <div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2 border'>
        <table class='table'>
          <thead class='bg-primary text-white shadow'>
            <tr>
              <th scope='col'>Sr.No.</th>
              <th scope='col'>Branch</th>
              <th scope='col'>Total Books</th>
              <th scope='col'>Titles</th>
            </tr>
          </thead>
          <?php
          while ($r1 = mysqli_fetch_array($result1)) {
            echo "<tr><td>$r1[0]</td>";
            echo "<td>$r1[1]</td>";
            echo "<td>$r1[2]</td>";
            echo "<td>$r1[3]</td>";
          } ?>
        </table>
      </div>
      <!-- //Table2-> Branch Wise Books End Here ----------- -->
    </div>

    <hr class="text-muted">


    <div class="col-lg-6">
      <!-- Table3-> Details of Newspaper Start Here ----------- -->
      <h6 class="h4 mb-3 font-weight-normal text-muted text-center">Details of Newspaper</h6>
      <?php
      $qry2 = "SELECT * from detail_of_newspaper";
      $result2 = mysqli_query($conn, $qry2);
      ?>
      <div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2 border'>
        <table class='table'>
          <thead class='bg-primary text-white shadow'>
            <tr>
              <th scope='col'>Sr.No.</th>
              <th scope='col'>Name of Newspaper</th>
              <th scope='col'>Language</th>
            </tr>
          </thead>
          <?php
          while ($r2 = mysqli_fetch_array($result2)) {
            echo "<tr><td>$r2[0]</td>";
            echo "<td>$r2[1]</td>";
            echo "<td>$r2[2]</td>";
          }
          echo "</table>";
          echo "</div>";
          //Table3-> Detail of Newspaper End Here -----------
          ?>
      </div>

      <div class="col-lg-6">

        <h6 class="h4 mb-3 font-weight-normal text-muted text-center">Details of Technical Magazines</h6>
        <?php
        //Table4-> Detail of Technical Magazines Start Here -----------
        $qry3 = "SELECT * from detail_of_tech_magazines";
        $result3 = mysqli_query($conn, $qry3); ?>
        <div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2 border'>
          <table class='table'>
            <thead class='bg-primary text-white shadow'>
              <tr>
                <th scope='col'>Sr.No.</th>
                <th scope='col'>Name of Technical Magazines</th>
              </tr>
            </thead>
            <?php
            while ($r3 = mysqli_fetch_array($result3)) {
              echo "<tr><td>$r3[0]</td>";
              echo "<td>$r3[1]</td>";
            } ?>
          </table>
        </div>
        <!-- //Table4-> Detail of Technical Magazines End Here ----------- -->

      </div>
      <hr class="text-muted">
      <div class="col-lg-6">

        <h6 class="h4 mb-3 font-weight-normal text-muted text-center">Details of Non-Technical Magazines</h6>
        <?php
        //Table5-> Detail of Non-Technical Magazines Start Here -----------
        $qry4 = "SELECT * from detail_of_non_tech_magazines";
        $result4 = mysqli_query($conn, $qry4);
        ?>
        <div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2 border'>
          <table class='table'>
            <thead class='bg-primary text-white shadow'>
              <tr>
                <th scope='col'>Sr.No.</th>
                <th scope='col'>Name of Non-Technical Magazines</th>
              </tr>
            </thead>
            <?php
            while ($r4 = mysqli_fetch_array($result4)) {
              echo "<tr>
              <td>$r4[0]</td>";
              echo "<td>$r4[1]</td>";
            } ?>
          </table>
        </div>
        <!-- //Table5-> Detail of Non-Technical Magazines End Here ----------- -->

      </div>

      <!-- Table6-> Detail of Journals Start Here ----------- -->
      <div class="col-lg-6">

        <h6 class="h4 mb-3 font-weight-normal text-muted text-center">Details of Journals</h6>
        <?php
        $qry5 = "SELECT * from detail_of_journals";
        $result5 = mysqli_query($conn, $qry5);
        ?>
        <div class='container text-bg-light shadow px-3 py-3 mb-5 bg-body rounded mt-2 border'>
          <table class='table'>
            <thead class='bg-primary text-white shadow'>
              <tr>
                <th scope='col'>Sr.No.</th>
                <th scope='col'>Name of Journals</th>
              </tr>
            </thead>
            <?php
            while ($r5 = mysqli_fetch_array($result5)) {
              echo "<tr><td>$r5[0]</td>";
              echo "<td>$r5[1]</td>";
            } ?>
          </table>
        </div>
      </div>
      <!-- //Table6-> Detail of Journals End Here ----------- -->
    </div>
  </div>
  <!-- Footer Start -->
  <!-- <div class="container mt-3"> -->
  <?php
  // include 'footer.php';
  ?>
  <!-- <hr> -->
  <!-- <section class="footer mt-3">
      <div class="copyright text-center fw-bold">Designed By <a href="https://www.instagram.com/brahamjot_2004" target="_blank" style="text-decoration: none; color:black;"> Brahamjot Singh (1014)</a> | <a href="https://www.instagram.com/ggold2315" target="_blank" style="text-decoration: none; color:black;">Abhishek Pandey (1001)</a> | <a href="https://www.instagram.com/gaganshah011111/" target="_blank" style="text-decoration: none; color:black;">Gagan Kumar Shah (1019)</a></div>
    </section>
  </div> -->
  <!-- Footer End -->
</body>

</html>