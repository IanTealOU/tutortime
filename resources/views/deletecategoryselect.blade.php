 <!DOCTYPE html>
<html>
<title>questionLogin</title>
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
</style>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>
    
</div>

<form method="post" action="addQuestion.blade.php">

    
    
</form>
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.blade.php");
	}
?>
	<h1>Delete category</h1>
      <?php $delcat_sql="SELECT * FROM category";
			$delcat_query=mysqli_query($dbconnect, $delcat_sql);
			$delcat_rs=mysqli_fetch_assoc($delcat_query);
			do { ?>
			<p><a href="index.blade.php?page=deletecategoryconfirm&categoryID=<?php echo $delcat_rs['categoryID']; ?>"><?php echo $delcat_rs['name']; ?></a></p>
			
			<?php
			} while ($delcat_rs=mysqli_fetch_assoc($delcat_query));
			?>