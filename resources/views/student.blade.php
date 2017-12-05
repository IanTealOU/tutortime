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
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.

    error_reporting(1);

#echo "Welcome Back, ".$_POST['username']."!";

    include("dbconnect.blade.php");
    session_start();
    if(isset($_GET['logout'])) {
        unset($_SESSION['student']);
    }
    
    if(isset($_POST['iexist']) and $_POST['iexist']=='yes') {
        $loginstud_sql="INSERT into `user` (username,password) VALUES ('".$_POST['username']."','".($_POST['password'])."')";
        $loginstud_query=mysqli_query($dbconnect, $loginstud_sql);
        if(mysqli_num_rows($loginstud_query)>0) {
           $loginstud_rs=mysqli_fetch_assoc($loginstud_query);
           $_SESSION['student']=$loginstud_rs['username'];
        } else {
           header("Location:index.blade.php?page=student&error=loginstud");
        }
    }
?>
      <?php if(isset($_SESSION['student'])) {
        echo "<p>You're already logged in!</p>";
        } else {
        echo '<form action="index.blade.php?page=student" method="post">
            <p>Username:<input name="username"></p>
            <p>Password:<input name="password" type="password"></p>
            <input type="hidden" name="iexist" value="yes">
            <p><input name="login" type="submit"></p>
        </form>';
        }
        ?>