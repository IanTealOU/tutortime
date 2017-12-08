<<<<<<< HEAD
<!DOCTYPE html>

<title>item</title>

<title>W3.CSS Template</title>

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
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"><h1>Welcome
            <strong><?php echo $_SESSION['name']; ?></strong></h1>
        >>>>>>> tutorPractice

        <div class="content">

            <!-- notification message -->

            <?php
            //This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
            include("dbconnect.blade.php");
            ?>
            <head>
                <title>TutorTime</title>

                <link href="styles.css" rel="stylesheet" type="text/css"/>
            </head>

            <body>
            <div class="container">
                <?php
                //This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
                include("dbconnect.blade.php");
                $stock_sql = "SELECT stock.*, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.id=" . $_GET['id'];
                $stock_query = mysqli_query($dbconnect, $stock_sql);
                $stock_rs = mysqli_fetch_assoc($stock_query);
                ?>
                <p><img src="resources/views/logo.jpg<?php echo $stock_rs['bigphoto']; ?>"/></p>

                <p><img src="images/<?php echo $stock_rs['bigphoto']; ?>"/></p>

                <p><?php echo $stock_rs['name']; ?></p>
                <p><?php echo $stock_rs['catname']; ?></p>

                <p>Question: <?php echo $stock_rs['question']; ?></p>
                <p>Answer: <?php echo $stock_rs['answer']; ?></p>

                <p><a class="btn btn-success"
                      href="questionAction.blade.php?action=addToCart&id=<?php echo $stock_rs["id"]; ?>">Add to
                        classes</a>
                </p>

                <p><a class="btn btn-success"
                      href="questionAction.blade.php?action=addToCart&id=<?php echo $stock_rs["id"]; ?>">Add to
                        class</a>
                </p>

            </div>
            </body>
        </div>
    </header>
</div>
=======
<!DOCTYPE html>
<html>
<title>item</title>
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
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

    <!-- Header -->
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"> 

	<div class="content">

		<!-- notification message -->
<html>
<head>
<title>TutorTime</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	$stock_sql="SELECT stock.*, category.name AS catname FROM stock JOIN category ON (stock.categoryID=category.categoryID) WHERE stock.id=".$_GET['id'];
	$stock_query=mysqli_query($dbconnect, $stock_sql);
	$stock_rs=mysqli_fetch_assoc($stock_query);
?>
	<p><img src="resources/views/logo.jpg<?php echo $stock_rs['bigphoto']; ?>" /></p>
      <p><?php echo $stock_rs['name']; ?></p>
	  <p><?php echo $stock_rs['catname']; ?></p>
	  
	  <p>Question: <?php echo $stock_rs['question']; ?></p>
	  <p>Answer: <?php echo $stock_rs['answer']; ?></p>
	<p> <a class="btn btn-success" href="questionAction.blade.php?action=addToCart&id=<?php echo $stock_rs["id"]; ?>">Add to classes</a><p>
	</div>
		
</body>
</html>
>>>>>>> parent of be7af9c... Updated
