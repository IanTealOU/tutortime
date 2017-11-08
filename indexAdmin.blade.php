<?php 
	session_start(); 

	if (!isset($_SESSION['name'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: adminLogin.blade.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['name']);
		header("location: adminLogin.blade.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Welcome Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['name'])) : ?>
			<a href="adminLanding.blade.php">Your Home Page</a>
			<p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>
			<p> <a href="indexAdmin.blade.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>