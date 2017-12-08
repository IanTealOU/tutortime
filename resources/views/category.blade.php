<<<<<<< HEAD

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

<form method="post" action="addQuestion.blade.php">


</form>

<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.blade.php");

//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");

if (!isset($_GET['categoryID'])) {
    header("Location:index.blade.php");
}
$stock_sql = "SELECT
		stock.id
		,stock.name
		,stock.question
		,stock.thumbnail
		,category.name AS catname
		FROM stock JOIN
		category ON
		(stock.categoryID=category.categoryID)
		WHERE stock.categoryID=" . $_GET['categoryID'];
if ($stock_query = mysqli_query($dbconnect, $stock_sql)) {
    $stock_rs = mysqli_fetch_assoc($stock_query);
}

?>
<h1><?php echo $stock_rs['catname']; ?></h1>
<?php do { ?>
<div class="item">
    <a href="index.blade.php?page=item&id=<?php echo $stock_rs['id']; ?>">
        <p><img src="images/<?php echo $stock_rs['thumbnail']; ?>"/></p>
        <p><?php echo $stock_rs['name']; ?></p>
        <p>Question: <?php echo $stock_rs['question']; ?></p>
    </a>
</div>
<?php
} while ($stock_rs = mysqli_fetch_assoc($stock_query))
?>
=======
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

<form method="post" action="addQuestion.blade.php">

    
    
</form>

<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.blade.php");
	if(!isset($_GET['categoryID'])) {
		header("Location:index.blade.php");
	}
	$stock_sql="SELECT
		stock.id
		,stock.name
		,stock.question
		,stock.thumbnail
		,category.name AS catname
		FROM stock JOIN
		category ON
		(stock.categoryID=category.categoryID)
		WHERE stock.categoryID=".$_GET['categoryID'];
	if($stock_query=mysqli_query($dbconnect, $stock_sql)) {
		$stock_rs=mysqli_fetch_assoc($stock_query);
	}
	
?>
      <h1><?php echo $stock_rs['catname']; ?></h1>
	  <?php do { ?>
		<div class="item">
		<a href="index.blade.php?page=item&id=<?php echo $stock_rs['id']; ?>">
		<p><img src="images/<?php echo $stock_rs['thumbnail']; ?>" /></p>
		<p><?php echo $stock_rs['name']; ?></p>
		<p>Question: <?php echo $stock_rs['question']; ?></p>
		</a>
		</div>
	  <?php
	  } while ($stock_rs=mysqli_fetch_assoc($stock_query))
	  ?>
>>>>>>> parent of be7af9c... Updated
