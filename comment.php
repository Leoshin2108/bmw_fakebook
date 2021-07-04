<?php
include 'db.php';
session_start();

if( (isset($_POST['btn_send_cmt'])) && ($_POST['content_cmt']) !='' )
{
    //echo $_SESSION["user"];
    $content = htmlspecialchars( $_POST['content_cmt']);
    $user=$_SESSION['user'];
    $id_post=$_POST['id'];
    //echo $user;
    //echo $content;
    echo $id_post;
    $sql =" INSERT INTO cmt (id_post,username_cmt,content_cmt) values('$id_post','$user','$content')";
    mysqli_query($con,$sql);
}
else
{
    header("location:index.php");
}
header("location:index.php");
?>
<?php

?>