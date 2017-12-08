<?include("dbconnect.blade.php");?>
<!DOCTYPE html>
<html>
<title>Login</title>
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

    .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
    .content {
                text-align: center;
            }
</style>
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form action="index.blade.php?page=admin" method="post">
	<p>Username:<input name="username" /></p>
	<p>Password:<input name="password" type="password" /></p>
	<?php
	if(isset($_GET['error'])) {
		echo "Incorrect username or password";
	}
	
	?>
	<p><input type="submit" name="login" /></p>
</form>
		
		 <p>
			Go to Welcome Page <a href="welcome.blade.php">--></a>
		</p>
	</form>

</body>
</html>