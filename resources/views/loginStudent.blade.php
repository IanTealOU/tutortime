<<<<<<< HEAD
<!DOCTYPE html>
<html>
<title>Register Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html, body {
                background-color: #fff;
                color: #9900cc;
                font-family: 'Raleway',Arial, sans-serif;
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
>>>>>>> cab55054412b6b92b5282f2fa804a26b21eb933b
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

<<<<<<< HEAD
   

    h1 {
        letter-spacing: 12px
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }
    .content {
                text-align: center;
            }
    .full-height {
                height: 100vh;
            }

    .flex-center {
=======
            .full-height {
                height: 100vh;
            }

            .flex-center {
>>>>>>> cab55054412b6b92b5282f2fa804a26b21eb933b
                align-items: center;
                display: flex;
                justify-content: center;
            }
<<<<<<< HEAD
</style>
</head>
<body>

<form action="loginStudent.blade.php" method="post">
    <p>Student Name:<input name="name" /></p>
    <p>Email:<input name="email" /></p>

    <p>Password:<input name="password" type="password" /></p>
    <?php
    if(isset($_GET['error'])) {
        echo "Student has login an incorrect username or password";
    }
    
    ?>
    <p><input type="submit" name="loginStudent" /></p>
=======

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

<form action="index.blade.php?page=students" method="post">
    <p>Username:<input name="studusername" /></p>
    <p>Password:<input name="studpassword" type="password" /></p>
    <?php
    if(isset($_GET['error'])) {
        echo "Dear Customer-Incorrect username or password";
    }
    
    ?>
    <p><input type="submit" name="loginstud" /></p>
>>>>>>> cab55054412b6b92b5282f2fa804a26b21eb933b
</form>

</body>
</html>