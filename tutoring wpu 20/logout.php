<?php 
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy(); 

    header("location: login.php");
    exit; 

    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);
?>