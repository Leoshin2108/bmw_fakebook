<?php
session_start();
    
include 'db.php';

if((isset ($_POST['submit'])) && $_POST['username']!= ''  && $_POST['password']!='' )
{
    $username = $_POST['username'];
    $pasword = $_POST['password'];
    $pasword = md5($pasword);
    $sql = "SELECT *from users where username= '$username' and password='$pasword'";

    $user =mysqli_query($con,$sql);
    
    //echo mysqli_num_rows($user);
    if ((mysqli_num_rows($user)>0))
    {
        //echo "ddawng nhap thanh cong";
        $username_hash = password_hash($username,PASSWORD_DEFAULT);
        $_SESSION["user"] =$username_hash;//$username_hash;
       header("location:index.php");
    }
    else
    if (mysqli_num_rows($user)==0)
    {
    header("location:login.php");
    }
}
else
{
   header("location:login.php");
}
?>