<?php
    session_start();
    // session_unset();
    // session_destroy();
    // $uno = $_GET['uno'];
    $_SESSION["uno"]="";
    // echo "......";
    // echo  $_SESSION["".$username.""];
    // setcookie('usernamecookie','',time()-86400);
    // setcookie('passwordcookie','',time()-86400);
    header('location: ../');
?>