<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
<<<<<<< HEAD
		header("Location:index.blade.php");
=======
		header("Location:index.php");
>>>>>>> tutorPractice
	}
	// Add new stock item to the database
	$enter_sql="INSERT INTO stock (name, categoryID, thumbnail, question, answer) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addQuestionStock']['name'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addQuestionStock']['categoryID'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addQuestionStock']['thumbnail'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addQuestionStock']['question'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addQuestionStock']['answer'])."')";

	$enter_query=mysqli_query($dbconnect, $enter_sql);
	
	// Unset the addQuestionStock session
	unset($_SESSION['addQuestionStock']);
?>
<p>Add New Question to the Category</p>
<<<<<<< HEAD
<p><a href="index.blade.php?page=admin">Back to admin</a></p>
=======
<p><a href="index.php?page=admin">Back to admin</a></p>
>>>>>>> tutorPractice
