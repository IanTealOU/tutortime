<?php include('studentServer.blade.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration for TutorOnYourTime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Student Registration for TutorOnYourTime</h2>
	</div>
	
	<form method="post" action="registerStudent.blade.php">

		<?php include('errors.blade.php'); ?>

		<div class="input-group">
			<label>Student's Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
			<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
			<p>
			Already a Student? <a href="studentLogin.blade.php">Sign in</a>
		</p>
	</form>
</body>
</html>
