<?php
include 'db.php';
session_start();

if( (isset($_POST['btn_post'])) && ($_POST['content']) !='' )
{
    //echo $_SESSION["user"];
    $content = htmlspecialchars($_POST['content']);
    $user=$_SESSION['user'];
    echo $user;
    echo $content;
    $sql =" INSERT INTO post (username_post,content_post) values('$user','$content')";
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