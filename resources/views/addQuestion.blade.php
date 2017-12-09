<!DOCTYPE html>
<html>
<title>Add Category</title>
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

    .content {
        text-align: center;
    }
</style>
<header>
    <div class="flex-center position-ref full-height"></div>

    <div class="top-right links">

        <a href="adminLanding.blade.php" class="w3-bar-item w3-button">Home</a>

    </div>
</header>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>

</div>

<form method="post" action="addQuestion.blade.php">


</form>
<!-- notification message -->
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.blade.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:index.blade.php");
}
if (!isset($_GET['update'])) {
    $_SESSION['addQuestion'] = "";
}
?>
<h1>Add a New Category</h1>
<form action="index.blade.php?page=addQuestionconfirm" method="post">
    <p>Category Name: <input name="name" value="<?php echo $_SESSION['addQuestion']; ?>"/></p>
    <p><input type="submit"/></p>
</form>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>
</body>
</html>