<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.blade.php");
	}
	$_SESSION['addQuestion']=$_POST['name'];
?>
	<h1>Add new category</h1>
      <p>You entered: <?php echo $_SESSION['addQuestion']; ?></p>
	  <p><a href="index.blade.php?page=addQuestioninsert">Confirm</a> | <a href="index.blade.php?page=addQuestion&update=true">Go back</a> | <a href="index.blade.php?page=admin">Back to admin panel</a></p>