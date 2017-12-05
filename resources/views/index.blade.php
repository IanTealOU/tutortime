<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
?>
<!DOCTYPE html>
<html>
<head>
		
	<link rel="stylesheet" type="text/css" href="style.css">


<title>TutorTime</title>

</head>

	<div class="content">

		<!-- notification message -->
		




<body>
<div class="container">
	<?php
		
// check to see if user is visiting a page other than the home page
	if(!isset($_GET['page'])) {
		?><div class="banner"><img src="" alt="TutorTime" /></div>
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
			include("$page.blade.php");
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
	
			</div>
		
</body>
</html>