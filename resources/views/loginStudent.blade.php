<<<<<<< HEAD
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
        font-family: 'Raleway', Arial, sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

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
        align-items: center;
        display: flex;
        justify-content: center;
    }
</style>
</head>
<body>

<form action="loginStudent.blade.php" method="post">
    <p>Student Name:<input name="name"/></p>
    <p>Email:<input name="email"/></p>

    <p>Password:<input name="password" type="password"/></p>
    <?php
    if (isset($_GET['error'])) {
        echo "Student has login an incorrect username or password";
    }

    ?>
    <p><input type="submit" name="loginStudent"/></p>
</form>

</body>
=======
=======
>>>>>>> parent of be7af9c... Updated
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
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

   

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
                align-items: center;
                display: flex;
                justify-content: center;
            }
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
</form>

</body>
<<<<<<< HEAD
>>>>>>> parent of be7af9c... Updated
=======
>>>>>>> parent of be7af9c... Updated
</html>