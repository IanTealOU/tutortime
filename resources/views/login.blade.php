
<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TutorTime</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
			Not Registered? <a href="login.blade.php">Sign up</a>
		</p>
		 <p>
			Go to Welcome Page <a href="welcome.blade.php">Home</a>
		</p>
	</form>

</body>
</html>