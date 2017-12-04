<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
	include("dbconnect.php");
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