<?php include('adminServer.blade.php') ?>
        <!DOCTYPE html>
<html>
<head>
    <title>Admin Registration for TutorOnYourTime</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
    <h2>Admin Login</h2>
</div>

<form method="post" action="adminLogin.blade.php">

    <?php include('errors.blade.php'); ?>

    <div class="input-group">
        <label>Admins Name</label>
        <input type="text" name="name">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not an Admin? <a href="welcome.blade.php">Home</a>
    </p>
</form>

</body>
</html>