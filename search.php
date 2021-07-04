<?php
include 'db.php';
session_start();
if( (isset($_POST['search'])) && ($_POST['find']) !='' )
{
    //echo $_POST['find'];
    $search = $_POST['find'];
   // echo $search;
    $sql = "SELECT *from post where content_post LIKE '%$search%' ";

    $find =mysqli_query($con,$sql);
    //echo mysqli_num_rows($find);
    //echo mysqli_num_rows($user);
    if ((mysqli_num_rows($find)>0))
    {
        //echo "ddawng nhap thanh cong";
        //$username_hash = password_hash($username,PASSWORD_DEFAULT);
       //echo mysqli_num_rows($find);
    
            $count = mysqli_num_rows($find);
            echo $count;
            $i=0;
            $data =array();
            while ($tmp = mysqli_fetch_array($find))
            { 
                $i=$i+1;
                ?>
                <!--nội dung bài đăng -->
                <a >
                <?php
                 //user

                    $user_temo = array (
                        'user'=>$tmp['username_post'],
                        'id'=>$tmp['id_post'],
                        'content'=>$tmp['content_post']
                    );
                    $data[$i] =$user_temo;
                    echo $data[$i]['user'];
                    echo $data[$i]['content'];
                    

                 //content
    
            }
    
    }   
}
else
{
   // header("location:index.php");
}
?>