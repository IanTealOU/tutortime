<?php include('server.blade.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration for TutorTime</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration for TutorTime</h2>
	</div>
	
	<form method="post" action="registeruser.blade.php">

		<?php include('errors.blade.php'); ?>

		<div class="input-group">
			<label>User Name</label>
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
			Already a member? <a href="login.blade.php">Sign in</a>
		</p>
	</form>
</body>
</html>