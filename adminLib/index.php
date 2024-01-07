<?php

if (isset($_SESSION['auth'])) {

    echo "<script> window.location.href = 'home/'; </script>";
    // header("Location: home");
    exit();
} else {

    echo "<script> window.location.href = 'login/'; </script>";
    // header("Location: login");
    exit();
}
