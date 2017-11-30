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
    <h1>Welcome <?php echo $_SESSION['name']; ?></h1>
</div>

<form method="post" action="questionLogin.blade.php">

    
        <div class="input-group">
            <label> Enter your course name</label>
            <input type="text" name="course_name" value="<?php echo $course_name; ?>">
        </div>

        
            <div class="input-group">
            <label> Enter Your Question?</label>
            <input type="text" name="questions" value="<?php echo $questions; ?>">
        </div>

        
            <div class="input-group">
            <label> Enter the Answer to the Question?</label>
            <input type="text" name="answer" value="<?php echo $answer; ?>">
        </div>
        
            <div class="input-group">
            <label> Is this the Correct Answer? Yes=1</label>
            <input type="text" name="correct" value="<?php echo $correct; ?>">
        </div>

        <div class="input-group">
            <button type="submit" class="btn" name="reg_login">Submit</button>

        </div>

        <a href="teacherLanding.blade.php" class="w3-bar-item w3-button">Account</a>

        <a href="welcome.blade.php" class="w3-bar-item w3-button">TutorTime Home</a>

        <a href="indexQuiz.blade.php?logout='1'" class="w3-bar-item w3-button">Logout</a>
    </div>
</form>
<!-- notification message -->
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
    include("dbconnect.blade.php");
    if(!isset($_SESSION['admin'])) {
    }
    if(!isset($_GET['update'])) {
        $_SESSION['addQuestion']="";
    }
?>
    <h1>Add new category</h1>
      <form action="index.php?page=addQuestionconfirm" method="post">
        <p>Name: <input name="name" value="<?php echo $_SESSION['addQuestion']; ?>" /></p>
        <p><input type="submit" /></p>
      </form>






<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>
</body>
</html>