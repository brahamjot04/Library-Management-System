<?php
$uri = "mysql://avnadmin:AVNS_jP_7hbtjNEEGP1Gmk4k@mysql-2c746119-brahamjot-lms.h.aivencloud.com:11032/defaultdb?ssl-mode=REQUIRED";
$fields = parse_url($uri);


//Database connection.
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

try {
   $db = new PDO($conn, $fields["user"], $fields["pass"]);

   $stmt = $db->query("SELECT VERSION()");
   print($stmt->fetch()[0]);
} catch (Exception $e) {
   echo "Error: " . $e->getMessage();
}
