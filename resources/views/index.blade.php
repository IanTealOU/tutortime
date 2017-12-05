<!DOCTYPE html>
<html>
<title>TutortTime</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1 {font-family: "Raleway", Arial, sans-serif}
    h1 {letter-spacing: 6px}
    .w3-row-padding img {margin-bottom: 12px}

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