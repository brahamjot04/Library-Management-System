<?php
//Database connection.
$conn = MySQLi_connect(
   "localhost", //Server host name.
   // "162.241.218.223", //Server host name.
   "root", //Database username.
   // "gndpolyo_admin", //Database username.
   "root", //Database password.
   // "qwerty@1234", //Database password.
   "gndpolyo_web" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
