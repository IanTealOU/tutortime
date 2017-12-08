<<<<<<< HEAD
<?include("dbconnect.blade.php");?>
        <!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>

    html, body {
        background-color: #fff;
        color: #9900cc;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .content {
        text-align: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #9900cc;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>
<body>

<div class="header">
    <h2>Login</h2>

    <h2>Student Login</h2>
</div>

<form action="index.blade.php?page=admin" method="post">
    <p>Username:<input name="username"/></p>
    <p>Password:<input name="password" type="password"/></p>
    <?php
    if (isset($_GET['error'])) {
        echo "Incorrect username or password";
    }

    ?>
    <p><input type="submit" name="login"/></p>
</form>


<p>
    Go to Welcome Page <a href="welcome.blade.php">--></a>

<p>
    Not yet a Student? <a href="student.blade.php">Sign up</a>
</p>
<p>
    Go to Welcome Page <a href="welcome.blade.php">Home</a>

</p>
</form>

</body>
=======
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
>>>>>>> parent of be7af9c... Updated
</html>