<?php
    include 'db.inc.php';
      $query= "select * from library_membership_form ";
      $data = mysqli_query($conn, $query);
      while($res=mysqli_fetch_array($data))
      {
        ?>
    <tr>
    <td> <img src="<?php echo $res['Student_Profile'];?>"></td> </tr>
<?php
}
?>