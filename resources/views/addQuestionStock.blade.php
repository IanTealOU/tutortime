 <!DOCTYPE html>
<html>
<title>TeacherQuestionLogin</title>
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

<form method="post" action="addQuestionStock.blade.php">

    
</form>
<!-- notification message -->
<?php
   
    
    if(!isset($_SESSION['admin'])) {
        header("Location:index.blade.php");
    }
    if(!isset($_SESSION['addQuestionStock'])) {
        $_SESSION['addQuestionStock']['name']="";
        $_SESSION['addQuestionStock']['categoryID']="1";
        $_SESSION['addQuestionStock']['question']="";
        $_SESSION['addQuestionStock']['answer']="";
        
        $_SESSION['addQuestionStock']['thumbnail']="noimage.jpg";
    } else {
        if($_SESSION['addQuestionStock']['thumbnail']!="noimage.jpg"){
            unlink("images/".$_SESSION['addQuestionStock']['thumbnail']);
        }
    }
    
    
    
    
?>
<div class="maincontent">
    <p><a href="index.blade.php?page=admin">Back to admin</a></p>
    <h1>Please enter your Question</h1>
    <form method="post" action="index.blade.php?page=confirmQuestion" enctype="multipart/form-data">
        <p>Question Name: <input type="text" name="name" value="<?php echo $_SESSION['addQuestionStock']['name']; ?>" /></p>
        <p>Question Image: <input type="file" name="fileToUpload" id="fileToUpload" /></p>
        <p>Category: <select name="categoryID">
            <?php $catlist_sql="SELECT * FROM category";
                $catlist_qry=mysqli_query($dbconnect, $catlist_sql);
                $catlist_rs=mysqli_fetch_assoc($catlist_qry);
                do { ?>
                    <option value="<?php echo $catlist_rs['categoryID']; ?>"
                    <?php 
                        if($catlist_rs['categoryID']==$_SESSION['addQuestionStock']['categoryID']) {
                            echo "selected=selected";
                        }
                    ?>
                    ><?php echo $catlist_rs['name']; ?></option>
                <?php } while ($catlist_rs=mysqli_fetch_assoc($catlist_qry));
        ?></select>
        </p>
            
        
        <p>question: <textarea name="question" cols=60 rows=5><?php echo $_SESSION['addQuestionStock']['question']; ?></textarea></p>
        <p>answer: <input type="text" name="answer" value="<?php echo $_SESSION['addQuestionStock']['answer']; ?>" /></p>
        <input type="submit" name="submit" value="Submit" />
    </form>
</div>






<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>
</body>
</html>