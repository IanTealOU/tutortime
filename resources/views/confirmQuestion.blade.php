<?php
	session_start();
	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	
	if(isset($_POST['submit'])) {
		$_SESSION['addQuestionStock']['name']=$_POST['name'];
		$_SESSION['addQuestionStock']['categoryID']=$_POST['categoryID'];
		
		
		$_SESSION['addQuestionStock']['question']=$_POST['question'];
		$_SESSION['addQuestionStock']['answer']=$_POST['answer'];
	} else {
		header("Location:index.php");
	}
	
	
	if($_FILES['fileToUpload']['name']!="") {
		$_SESSION['addQuestionStock']['thumbnail']=$_FILES['fileToUpload']['name'];
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			if($check !== false) {
				//echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
		} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			?>
			<div class="maincontent">
				<p><a href="index.php?page=admin">Back to admin</a></p>
				<h1>Confirm Question Details</h1>
				<p>Question: <?php echo $_SESSION['addQuestionStock']['name']; ?></p>
				<p>Add an Image: <img src="images/<?php echo $_SESSION['addQuestionStock']['thumbnail']; ?>" /></p>
				<p>Category: 
				<?php
					$catname_sql="SELECT name FROM category WHERE categoryID=".$_SESSION['addQuestionStock']['categoryID'];
					$catname_qry=mysqli_query($dbconnect, $catname_sql);
					$catname_rs=mysqli_fetch_assoc($catname_qry);
					echo $catname_rs['name'];
				
				?>
				</p>
				
				
				<p>Question: <?php echo $_SESSION['addQuestionStock']['question']; ?></p>
				<p>Answer: <?php echo $_SESSION['addQuestionStock']['answer']; ?></p>
			
			</div>
			<?php
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
	
} // the code below only runs if no image is selected	
	else {
		$_SESSION['addQuestionStock']['thumbnail']="noimage.jpg";
		?>
		<div class="maincontent">
				<p><a href="index.php?page=admin">Back to admin</a></p>
				<h1>Confirm Question Information</h1>
				<p>Question: <?php echo $_SESSION['addQuestionStock']['name']; ?></p>
				<p>Thumbnail: <img src="images/<?php echo $_SESSION['addQuestionStock']['thumbnail']; ?>" /></p>
				<p>Category: 
				<?php
					$catname_sql="SELECT name FROM category WHERE categoryID=".$_SESSION['addQuestionStock']['categoryID'];
					$catname_qry=mysqli_query($dbconnect, $catname_sql);
					$catname_rs=mysqli_fetch_assoc($catname_qry);
					echo $catname_rs['name'];
				
				?>
				</p>
				
				
				<p>Question: <?php echo $_SESSION['addQuestionStock']['question']; ?></p>
				<p>Answer: <?php echo $_SESSION['addQuestionStock']['answer']; ?></p>
			
			</div>
		<?php
	}
?>
<p><a href="index.php?page=addQuestionStock">Go back</a> - <a href="index.php?page=enterstock">Confirm</a></p>