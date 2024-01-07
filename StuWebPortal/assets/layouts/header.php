<?php

session_start();
require '../assets/setup/env.php';
require '../assets/setup/db.inc.php';
require '../assets/includes/auth_functions.php';
require '../assets/includes/security_functions.php';
if (isset($_SESSION['auth'])) {
  $_SESSION['expire'] = ALLOWED_INACTIVITY_TIME;
}
generate_csrf_token();
check_remember_me();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo APP_DESCRIPTION;  ?>">
  <meta name="author" content="<?php echo APP_OWNER;  ?>">

  <title><?php echo TITLE . ' | ' . APP_NAME; ?></title>
  <!-- <link rel="icon" type="image/png" href="../assets/images/favicon.png"> -->

  <link rel="stylesheet" href="../assets/vendor/bootstrap-4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendor/fontawesome-5.12.0/css/all.min.css">

  <!-- Custom styles -->
  <link rel="stylesheet" href="../assets/css/app.css">
  <link rel="stylesheet" href="custom.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <style>
    * {
      -webkit-user-select: none;
      /* Safari */
      -ms-user-select: none;
      /* IE 10 and IE 11 */
      user-select: none;
      /* Standard syntax */
    }

    ::-webkit-scrollbar {
      width: 8px;
      height: 8px;
      /* width of the entire scrollbar */
    }

    ::-webkit-scrollbar-track {
      background: grey;
      /* color of the tracking area */
    }

    ::-webkit-scrollbar-thumb {
      background-color: blue;
      /* color of the scroll thumb */
      border-radius: 15px;
      /* roundness of the scroll thumb */
    }
  </style>
</head>

<body>

  <?php require 'navbar.php'; ?>

</body>

</html>