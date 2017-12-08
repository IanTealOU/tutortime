<?php include('studentServer.blade.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration for TutorOnYourTime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Student Login</h2>
	</div>
	
	<form method="post" action="studentLogin.blade.php">

		<?php include('errors.blade.php'); ?>

		<div class="input-group">
			<label>Student's Name</label>
			<input type="text" name="name" >
		</div>
			<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button> 
		</div>
		<p>
			Not yet a Student? <a href="registerStudent.blade.php">Sign up</a>
		</p>
		 <p>
			Go to Welcome Page <a href="welcome.blade.php">Home</a>
		</p>
	</form>

</body>
</html>