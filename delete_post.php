<?php
session_start();
include 'db.php';
//echo $_SESSION['user'];
//echo $_SESSION['id'];
$id_post= $_SESSION['id'];
//echo  $_SESSION['id'];
$username_post= $_SESSION['usr'];
echo $id_post;
echo $username_post;
$sql = "SELECT *from post where id_post=$id_post";

$delete =mysqli_query($con,$sql);
if ((mysqli_num_rows($delete)>0))
    {
       //$_SESSION["user"] =$username;//$username_hash
       $sql_delete= "DELETE FROM post  where id_post=$id_post";
        $delete_post =mysqli_query($con,$sql_delete);
        $sql_delete_cmt="DELETE FROM cmt  where id_post=$id_post";
        $delete_cmt =mysqli_query($con,$sql_delete_cmt);
       header("location:fakebook.php");
    }
    else
    {
        echo "khong";
    }
?>