<?php
session_start();
    
include 'db.php';

if((isset ($_POST['submit'])) && $_POST['username']!= ''  && $_POST['password']!='' )
{
    $username = $_POST['username'];
    $pasword = $_POST['password'];
    //$pasword = password_hash($password, PASSWORD_DEFAULT);//md5($pasword);
    //echo
    $sql = "SELECT *from users where username= '$username' ";

    $user =mysqli_query($con,$sql);
    
    //echo mysqli_num_rows($user);
    if ((mysqli_num_rows($user)>0))
    {
        $tmp = mysqli_fetch_array($user);
        //echo $tmp['password'] ;
        $password_check = password_verify($pasword,$tmp['password']);
        if ($password_check)
        {
        echo "ddawng nhap thanh cong";
        $username_hash = password_hash($username,PASSWORD_DEFAULT);
        $_SESSION["user"] =$username_hash;//$username_hash;
        header("location:fakebook.php");
        }
        else
        {
            echo"không thanh công";
            header("location:login.php");
        }
        
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