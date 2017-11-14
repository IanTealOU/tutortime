<?php 
	session_start(); 

	if (!isset($_SESSION['questions'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: studentLogin.blade.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['name']);
		header("location: studentLogin.blade.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['questions'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['questions']; 
						unset($_SESSION['questions']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in Student's information -->
		<?php  if (isset($_SESSION['questions'])) : ?>
			<a href="studentLanding.blade.php">Your Home Page</a>

			<p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>

			<p> <a href="indexStudent.blade.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>