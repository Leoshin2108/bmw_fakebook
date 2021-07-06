<?php
include 'db.php';
session_start();
if( (isset($_POST['search'])) && ($_POST['find']) !='' )
{
   $_SESSION["search"]=$_POST['find'];
   //echo $_SESSION["search"];
    require_once "seach.php";
}

else
{
  header("location:index.php");
}
?>