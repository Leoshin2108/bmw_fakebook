<?php
    session_start();
    
    unset($_SESSION['user']);
    unset($_SESSION['usr']);
    session_destroy();
    header("location:login.php");

?>