<<<<<<< HEAD
<<<<<<< HEAD
<?include("dbconnect.blade.php");?>
        <!DOCTYPE html>
<html>
<title>Admin</title>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style>
    body, h1 {
        font-family: "Raleway", Arial, sans-serif
    }

    h1 {
        letter-spacing: 6px
    }

    .w3-row-padding img {
        margin-bottom: 12px
    }

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
</style>
<form>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width:1500px">

        <!-- Header -->
        <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>

    </div>


</form>
</head>
<body>
<div class="header">
    <p>Welcome Back, <strong><?php if (!empty($_SESSION)) {
                echo $_SESSION['username'];
            } ?></strong></p>

</div>
<div class="content">

    <!-- notification message -->
    <?php
    //This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.


    session_start();

    include("dbconnect.blade.php");

    if (isset($_GET['logout'])) {
        unset($_SESSION['admin']);
    }

    if (isset($_POST['login'])) {
        $login_sql = "SELECT * FROM user WHERE username='" . $_POST['username'] . "' AND password='" . ($_POST['password']) . "'";
        $login_query = mysqli_query($dbconnect, $login_sql);
        if (mysqli_num_rows($login_query) > 0) {
            $login_rs = mysqli_fetch_assoc($login_query);
            $_SESSION['admin'] = $login_rs['userid'];
        } else {
            header("Location:index.blade.php?page=admin&error=login");
        }
    }
    ?>
    <?php if (!isset($_SESSION['admin'])) {
        include("login.blade.php");
    } else {
        include("adminpanel.blade.php");
    }
    ?>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>


</body>
=======
=======
>>>>>>> parent of be7af9c... Updated
<?include("dbconnect.blade.php");?>
 <!DOCTYPE html>
<html>
<title>Admin</title>
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

    .w3-row-padding img {
        margin-bottom: 12px
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
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>
    
</div>

   
    
</form>
</head>
<body>
	
	</div>
	<div class="content">

		<!-- notification message -->
	<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	
    session_start();
	if(isset($_GET['logout'])) {
		unset($_SESSION['admin']);
	}
	
	if(isset($_POST['login'])) {
		$login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".($_POST['password'])."'";
		$login_query=mysqli_query($dbconnect, $login_sql);
		if(mysqli_num_rows($login_query)>0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['admin']=$login_rs['userid'];
		} else {
			header("Location:index.blade.php?page=admin&error=login");
		}
	}
?>
      <?php if(!isset($_SESSION['admin'])) {
		include("login.blade.php");
		} else {
		include("adminpanel.blade.php");
		}
		?>
	</div>
		

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>
</body>
<<<<<<< HEAD
>>>>>>> parent of be7af9c... Updated
=======
>>>>>>> parent of be7af9c... Updated
</html>