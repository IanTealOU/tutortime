<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TutorTime</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #9900cc;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #9900cc;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="header">

        <div class="logo">
        <a href="index.blade.php"><img src="resources/views/logo.jpg" alt="TutorTime" /></a>
        </div><!--logo ends-->
        
        <div class="navigation">
        
        
        <?php 
            $cat_sql="SELECT * FROM category";
            $cat_query=mysqli_query($dbconnect, $cat_sql);
            $cat_rs=mysqli_fetch_assoc($cat_query);
        ?>
        <p><?php
            do { ?>
            <a href="index.blade.php?page=category&categoryID=<?php echo $cat_rs['categoryID']; ?>"><?php echo $cat_rs['name']; ?></a>
                
                <?php
            } while ($cat_rs=mysqli_fetch_assoc($cat_query))
        ?>
        <a href="index.blade.php?page=admin">TutorTime Login</a>
    <a href="index.blade.php?page=student">TutorTime Register</a>
    
        </p>
      </div><!--navigation ends-->
    </div><!-- Header ends here-->
        
        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">
                    
                        <a href="login.blade.php">Login</a>
                        						
                    
                </div>
            

            <div class="content">
                <div class="title m-b-md">
                    TutorTime
                </div>

                </div>
            </div>
        </div>
    </body>
</html>