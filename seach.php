<!DOCTYPE html>
            <html lang="en">
            <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="./home.css">
            <title>Home</title>
            </head>

            <body>
            
                <div class ="header" >
                <div>
                
                <a class="fakebook" href="index.php">FaKeBoOk<a>
                    <form action="find.php" method="POST">
                        <input name="find"  type="text" placeholder=" tìm kiếm"> 
                        <button name="search" type="submit">seach</button>  
                    </form>
                   
                        <div class="menu ">
                        <l id="main_menu" >
                            <li><a href="" class="">Trang cá nhân</a></li>
                            <li>
                            <form action="logout.php" method="POST">
                        <button name="logout" type="submit">log out</button>  
                    </form>
                            </li>
                            <li><a href="" >Cài đặt</a></li>
                        </div>
                              
                    </div>
                

                
                <div class="main1">
                    <form action="post.php" method="POST">
                        <div>
                            <input name="content" class="un" type="text" placeholder="bạn đạng nghĩ gì">   
                            <button name="btn_post" type="submit">đăng</button>
                        </div>
                    </form>
                
                <div class="post">
                <?php  
                 //content
                 require_once "viewsearch.php" ?>
                
                </div>  
                        
            </body>
            </html>
            <html>
