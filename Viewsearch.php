<?php
include 'db.php';
?>
<div>
    <!--lấy ảnh source ava-->
      <!--tên người đăng bài -->
      <a>
        <?php
         $seach= ['-','\'','#',''];
         $repalce='';
         //echo $_POST['find'];
         $search = htmlspecialchars($_SESSION['search']);
         $search = addslashes($search);
        // $search =str_replace($seach,$repalce,$search);
         
         $sql = "SELECT *from post where content_post LIKE '%$search%' ";
     
         $post =mysqli_query($con,$sql);
        
        //echo mysqli_num_rows($post);
         if ((mysqli_num_rows($post)>0))
         {
            $count = mysqli_num_rows($post);
            //echo $count;
            $i=0;
            $data =array();
            while ($tmp = mysqli_fetch_array($post))
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
                   
                ?>
                </a>
                <a>:</a>
              <a>
              <?php
              echo $data[$i]['content'];
               ?>  
                <?php   
                   if ($_SESSION['usr']== $data[$i]['user'])
                   {
                       
                       ?>
                       <form action="delete_post.php" method="POST" >
                    
                       <?php
                       //echo  $data[$i]['id'];
                       $_SESSION["id"] =$data[$i]['id'];
                       
                       ?>
                       
                       <button name="delete" type="submit">xóa</button>
                       <input type="hidden">
                       </form>
                     
                       <?php

                   }
                    
                   ?>
              </a>
                
                <div class="cmt_l">
                  <!--cmt-->
                  <!--input nhập bình luật-->
                  <form action="comment.php" method="POST">
                    <?php
                        $t= $data[$i]['id'];
                         $sql = "SELECT *from cmt where id_post=$t";
                         $con_cmt =mysqli_query($con,$sql);
                         if ((mysqli_num_rows($con_cmt)>0))
                         {
                            $count = mysqli_num_rows($con_cmt);
                            $arcmt= array();
                            $j=0;
                            while ($tmp = mysqli_fetch_array($con_cmt))
                            {
                                $j++;
                                $cmt_temp = array (
                                    'user'=>$tmp['username_cmt'],
                                    'id'=>$tmp['id_post'],
                                    'content'=>$tmp['content_cmt']
                                );
                                $arcmt[$j]=$cmt_temp;
                                //$id_temp=$tmp['id_post'];
                                echo $arcmt[$j]['user'];
                                
                                ?> 
                                <a>:</a>
                                <?php
                                echo $arcmt[$j]['content'];  
                                ?>
                                </br>
                                <?php 
                            }
                        }
                    ?>
                    <input name="content_cmt" class="cmt" placeholder="bình luận ở đây">
                    <!--button đăng bình luận-->
                    <input name="id" hidden="" value="<?php echo $data[$i]['id']?>">
                    <button name="btn_send_cmt" type="submit">send</button>
    
                  </form>
                  
                </div>
            <?php }
         } else
         echo "không tìm thấy kết quả";
        ?>
      </a>
    </div>   
   
    
    
  </div>
