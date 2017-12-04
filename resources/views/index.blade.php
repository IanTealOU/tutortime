<!DOCTYPE html>
<html>
<head>
	<title>Test Your Knowledge</title>
	<p> This is a multiple choice Quiz <p>

	<link rel="stylesheet" type="text/css" href="style.css">

	<div class="content">

		<!-- notification message -->
	<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
?>
<html>
<head>
<title>TutorTime</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
		include("header.php");
// check to see if user is visiting a page other than the home page
	if(!isset($_GET['page'])) {
		?><div class="banner"><img src="images/banner.jpeg" alt="Our Banner" /></div>
		<?php
	}
	
	?>
    <div class="maincontent">
 <!-- main content goes here-->
      <?php 
		if(!isset($_GET['page'])) {
			include("home.blade.php");
		} else {
			$page=$_GET['page'];
			include("$page.php");
		}
	  
	  ?>
  </div>
    <?php
		include("seccontent.blade.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>

			<p> <a href="index.blade.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>
</html>