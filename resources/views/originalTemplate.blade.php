<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
<<<<<<< HEAD
	include("dbconnect.blade.php");
=======
	include("dbconnect.php");
>>>>>>> tutorPractice
?>

<!DOCTYPE html>
<html>
<title>studentLanding</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1 {font-family: "Raleway", Arial, sans-serif}
    h1 {letter-spacing: 6px}
    .w3-row-padding img {margin-bottom: 12px}
</style>

<html>
<head>
<title>TutorTime</title>

</head>

<body>
<div class="container">
	<?php
		include("header.blade.php");
	?>
    <div class="maincontent">
 <!-- main content goes here-->
      <p>Names Here</p>
  </div>
    <?php
		include("seccontent.blade.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>
