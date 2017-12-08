
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

    .content {
        text-align: center;
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
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.blade.php");

//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");

	}
?>
<h1>Confirm Category to Delete</h1>
<?php $delcat_sql = "SELECT * FROM category WHERE categoryID=" . $_GET['categoryID'];
$delcat_query = mysqli_query($dbconnect, $delcat_sql);
$delcat_rs = mysqli_fetch_assoc($delcat_query);

// check if there are any questions are in this category
$check_sql = "SELECT * FROM stock WHERE categoryID=" . $_GET['categoryID'];
$check_query = mysqli_query($dbconnect, $check_sql);
$count = mysqli_num_rows($check_query);
?>
<p><?php if ($count > 0) {
        echo "Warning! There are " . $count . " stock item(s) in this category. If you delete the category they will also be removed from the database";
    } ?></p>
<p><?php echo "Do you really want to delete " . $delcat_rs['name'] . "?"; ?></p>

<p><a href="index.blade.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID']; ?>"
      class="w3-bar-item w3-button">Yes, delete it!</a> | <a href="index.blade.php?page=deletecategoryselect"
                                                             class="w3-bar-item w3-button">No, go back</a> | <a
            href="index.blade.php?page=admin" class="w3-bar-item w3-button">Back to Teacher Panel</a></p>

<p><a href="index.php?page=deletecategory&categoryID=<?php echo $_GET['categoryID']; ?>">Yes, delete it!</a> | <a
            href="index.php?page=deletecategoryselect">No, go back</a> | <a href="index.php?page=admin">Back to admin
        panel</a></p>

