<<<<<<< HEAD
<!DOCTYPE html>
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
</style>
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.blade.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:index.blade.php");
}
?>
<h1> Choose the Question to Delete</h1>
<?php $delcat_sql = "SELECT * FROM stock";
$delcat_query = mysqli_query($dbconnect, $delcat_sql);
$delcat_rs = mysqli_fetch_assoc($delcat_query);
do { ?>
<a href="index.blade.php?page=deletequestionconfirm&question" class="w3-bar-item w3-button">
    <?php}

    while ($delcat_rs = mysqli_fetch_assoc($delcat_query));?>
    <a href="index.blade.php?page=admin&logout=true" class="w3-bar-item w3-button"> Logout</a>

    <?php
    //This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
    include("dbconnect.php");
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location:index.php");
    }
    ?>

    <h1> Delete category</h1>
    <?php $delcat_sql = "SELECT * FROM category";
    $delcat_query = mysqli_query($dbconnect, $delcat_sql);
    $delcat_rs = mysqli_fetch_assoc($delcat_query);
    ?>
    <a href="index.php?page=deletecategoryconfirm&category" ?>
    </a></a>
=======
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
</style>
<header>
    <div class="flex-center position-ref full-height">

        <div class="top-right links">

            <a href="adminLanding.blade.php">Home</a>

        </div>
</header>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>
    
</div>

<form method="post" action="deletecategoryselect.blade.php">

    
    
</form>
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.blade.php");
	}
?>
	<h1>Choose the Question to Delete</h1>
      <?php $delcat_sql="SELECT * FROM stock";
			$delcat_query=mysqli_query($dbconnect, $delcat_sql);
			$delcat_rs=mysqli_fetch_assoc($delcat_query);
			do { ?>
			<p><a href="index.blade.php?page=deletequestionconfirm&question=<?php echo $delcat_rs['question']; ?>" class="w3-bar-item w3-button"><?php echo $delcat_rs['question']; ?></a></p>
			
			<?php
			} while ($delcat_rs=mysqli_fetch_assoc($delcat_query));
			?>
			<a href="index.blade.php?page=admin&logout=true" class="w3-bar-item w3-button">Logout</a>
>>>>>>> parent of be7af9c... Updated
