<?php

include 'db.php';
//echo "sigun";


if((isset ($_POST['submit'])) && $_POST['username']!= '' && $_POST['Email']!= '' && $_POST['password']!= '' && $_POST['repassword']!='' )
{
    
    $seach= ['-','\'','#',''];
    $repalce='';

    $username   =addslashes($_POST['username']);
    $Email      =addslashes($_POST['Email']);
    $password   =addslashes($_POST['password']);
    $repassword =addslashes($_POST['repassword']);
    
    $filer_usr =str_replace($seach,$repalce,$username);
    echo $filer_usr;
    //echo "123";
    if(($repassword != $password) or ($username != $filer_usr))
    {

        header("location:sign_up.php");
    }
    $sql ="SELECT *FROM users where username = '$username'";
    $old =mysqli_query($con,$sql);
    //echo mysqli_num_rows($old);
    if ((mysqli_num_rows($old)>0))
   {    
       header("location:sign_up.php");
   }
   else
   {
    //$password = md5($password);
    $password=password_hash($password, PASSWORD_DEFAULT);
    $sql =" INSERT INTO users (username,password,email) values('$username','$password','$Email')";
    mysqli_query($con,$sql);
    //echo"123";
    ?>
 
    <?php
    header("location:login.php");
   }
    
}

else
{
    header("location:sign_up.php");
}
?>