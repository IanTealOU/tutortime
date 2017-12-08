<!DOCTYPE html>
<html>
<title>Student Login</title>
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
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.

error_reporting(1);

#echo "Welcome Back, ".$_POST['username']."!";

include("dbconnect.blade.php");
session_start();
if (isset($_GET['logout'])) {
    unset($_SESSION['students']);
}

if (isset($_POST['students'])) {
    $loginStudent_sql = "INSERT * INTO students WHERE name='" . $_POST['name'] . "' AND password='" . ($_POST['password']) . "'";
    $loginStudent_query = mysqli_query($dbconnect, $loginStudent_sql);
    if (mysqli_num_rows($loginStudent_query) > 0) {
        $loginStudent_rs = mysqli_fetch_assoc($loginStudent_query);
        $_SESSION['students'] = $login_rs['id'];
    } else {
        header("Location:studentLanding.blade.php");
    }
}
?>
<?php if (!isset($_SESSION['students'])) {
    include("loginStudent.blade.php");
} else {
    include("studentLanding.blade.php");
}
?>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>
</body>
</html>