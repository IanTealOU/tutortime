<<<<<<< HEAD

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
=======
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
    >>>>>>> tutorPractice
</head>
<body>
<div class="header">

    <div class="logo">
        <<<<<<< HEAD
        <a href="index.blade.php"><img src="resources/views/logo.jpg" alt="TutorTime"/></a>
        =======
        <a href="index.php"><img src="images/logo.jpeg" alt="TutorTime"/></a>
        >>>>>>> tutorPractice
    </div><!--logo ends-->

    <div class="navigation">


        <?php
        $cat_sql = "SELECT * FROM category";
        $cat_query = mysqli_query($dbconnect, $cat_sql);
        $cat_rs = mysqli_fetch_assoc($cat_query);
        ?>
        <p><?php
            do { ?>
            <<<<<<< HEAD
            <a href="index.blade.php?page=category&categoryID=<?php echo $cat_rs['categoryID']; ?>"><?php echo $cat_rs['name']; ?></a>
            =======
            <a href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID']; ?>"><?php echo $cat_rs['name']; ?></a>
            >>>>>>> tutorPractice

            <?php
            } while ($cat_rs = mysqli_fetch_assoc($cat_query))
            ?>
            <<<<<<< HEAD
            <a href="index.blade.php?page=admin">TutorTime Login</a>
            <a href="index.blade.php?page=student">TutorTime Register</a>
            =======
            <a href="index.php?page=admin">TutorTime Login</a>
            <a href="index.php?page=student">TutorTime Register</a>
            >>>>>>> tutorPractice

        </p>
    </div><!--navigation ends-->
</div><!-- Header ends here-->

<div class="flex-center position-ref full-height">

    <div class="top-right links">

        <<<<<<< HEAD
        <a href="login.blade.php">Login</a>

        =======
        <a href="teacherLogin.blade.php">Teacher Login</a>
        <a href="studentLogin.blade.php">Student Login</a>
        <a href="adminLogin.blade.php">Admin Login</a>
        <a href="registerAdmin.blade.php">Admin Register</a>
        <a href="registerTeacher.blade.php">Teacher Register</a>
        <a href="registerStudent.blade.php">Student Register</a>
        >>>>>>> tutorPractice

    </div>


    <div class="content">
        <div class="title m-b-md">
            TutorTime
        </div>

        <<<<<<< HEAD
        =======
        <div class="links">
            <a href="https://www.oakland.edu/">AboutUs</a>
            <a href="https://www.merriam-webster.com/dictionary/dictionary">Dictionary</a>
            <a href="http://www.edweek.org/tm/index.html">TeacherNews</a>
            <a href="https://www.britannica.com/">Encyclopedia</a>
            <a href="https://www.oakland.edu/">ContactUs</a>
            >>>>>>> tutorPractice
        </div>
    </div>
</div>
</body>
=======
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
>>>>>>> parent of be7af9c... Updated
</html>