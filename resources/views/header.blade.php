 <!DOCTYPE html>
<html>
<title>questionLogin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, h1 {
        font-family: "Raleway", Arial, sans-serif
    }

    h1 {
        letter-spacing: 6px
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }
</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>
    
</div>

<form method="post" action="addQuestion.blade.php">

    
    
</form>
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