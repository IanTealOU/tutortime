<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.blade.php");
	}
	$_SESSION['editcategory']['name']=$_POST['name'];
?>
	<h1>Edit category</h1>
    <p>Updated category name: <?php echo $_SESSION['editcategory']['name']; ?></p>
	<p><a href="index.blade.php?page=editcategoryupdate">Confirm</a> | <a href="index.blade.php?page=editcategory">Oops, go back</a> | <a href="index.blade.php?page=admin">Back to Your Teacher Page</a></p>