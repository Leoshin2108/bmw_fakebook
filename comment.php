<?php
include 'db.php';
session_start();

if( (isset($_POST['btn_send_cmt'])) && ($_POST['content_cmt']) !='' )
{
    //echo $_SESSION["user"];
    $content = htmlspecialchars( $_POST['content_cmt']);
    $content = addslashes($content);
    // $search= ['\''];

    //  $repalce='‘'; 
    // $content =str_replace($search,$repalce,$content);

 
    $user=$_SESSION['usr'];
    $id_post=$_POST['id'];
    //echo $user;
    //echo $content;
    echo $id_post;
    $sql =" INSERT INTO cmt (id_post,username_cmt,content_cmt) values('$id_post','$user','$content')";
    mysqli_query($con,$sql);
}
else
{
    header("location:fakebook.php");
}
header("location:fakebook.php");
?>
<?php

?>