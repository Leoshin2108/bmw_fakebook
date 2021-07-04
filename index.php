<?php
        session_start();    
        if (!isset($_SESSION["user"]))  
        {
            header("location:login.php");
        } else
        {
       
           require_once "./home.php";
       
        }
?>


         
