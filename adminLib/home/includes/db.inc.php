
<?php
//Database connection.
$conn = "mysql:";
$conn .= "host=localhost";
$conn .= ";port= 3306";
$conn .= ";dbname=gndpolyo_web";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
   $db = new PDO($conn, 'root', 'root');

   $stmt = $db->query("SELECT VERSION()");
   print($stmt->fetch()[0]);
} catch (Exception $e) {
   echo "Error: " . $e->getMessage();
}
