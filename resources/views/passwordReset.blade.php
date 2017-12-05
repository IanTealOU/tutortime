<?php include('dbconnect.blade.php') ?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>TutorTime</title>
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 10vh;
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
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 5px;
    }

</style>
<header>
    <div class="flex-center position-ref full-height">

        <div class="top-right links">

            <a href="adminLanding.blade.php">Home</a>

        </div>
</header>

<body>

<div class="header">
    <h2>Change Password</h2>
</div>

<form method="post" action="admin.blade.php">

   <!--<?php include('errors.blade.php'); ?> -->
   <div class="input-group">
        <label>Student's Name:</label>
        <input type="password" name="password" >
    </div>

    <div class="input-group">
        <label>Old Password:</label>
        <input type="password" name="password" >
    </div>
    <div class="input-group">
        <label>New Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login">Save</button>
    </div>
</form>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>

</body>
</html>
