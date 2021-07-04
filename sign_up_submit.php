<?php

include 'db.php';

if((isset ($_POST['submit'])) && $_POST['username']!= '' && $_POST['Email']!= '' && $_POST['password']!= '' && $_POST['repassword']!='' )
{
    
   
    $username   =$_POST['username'];
    $Email      =$_POST['Email'];
    $password   =$_POST['password'];
    $repassword =$_POST['repassword'];
    //echo "123";
    if($repassword != $password)
    {
        header("location:sign_up.php");
    }
    $sql ="SELECT *FROM users where username = '$username'";
    $old =mysqli_query($con,$sql);
    if ((mysqli_num_rows($old)>0))
    {
        header("location:sign_up.php");
    }
    $password = md5($password);
    $sql =" INSERT INTO users (username,password,email) values('$username','$password','$Email')";
    mysqli_query($con,$sql);
    //echo"123";
    header("location:login.php");
}

else
{
    header("location:sign_up.php");
}
?>