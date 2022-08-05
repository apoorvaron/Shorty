<?php
    session_start();
    // session_unset();
    // session_destroy();
    $username = $_GET['username'];
    $uno = $_GET['uno'];
    $_SESSION["".$username.""]=="";
    header('location: ./login.php');
?>