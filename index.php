<?php
 include'db.php';
        session_start();    
        if (!isset($_SESSION["user"]))  
        {
            header("location:login.php");
        } else
        { 
            $sql ="SELECT username FROM  users";
            $row =mysqli_query($con,$sql);

            //echo mysqli_num_rows($row);
            $user = hash_user($_SESSION['user'],$row);
            //echo $user;
            $_SESSION['usr']=$user;
            
           require_once "./home.php";
       
        }
        function hash_user($a,$row)
        {
           
            while ($tmp = mysqli_fetch_array($row))
            { 
                if (password_verify($tmp['username'],$a))
                {
                    return $tmp['username'];
                }
            }

        }

?>


         
