<?php include('quizServer.blade.php') ?>

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
<form>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width:1500px">

        <!-- Header -->
        <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>
        <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
    </div>

    <form method="post" action="questionLogin.blade.php">

        <div class="questionLogin">
            <div class="input-group">
                <label> Enter your course name!</label>
                <input type="text" name="course_name" value="">
            </div>

            <div class="input-group">
                <label> Enter Your Question?</label>
                <input type="text" name="questions" value="">

            </div>

            <div class="input-group">
                <label> Enter the Answer to the Question?</label>
                <input type="text" name="answer" value="">
            </div>

            <div class="input-group">
                <button type="submit" class="btn" name="login_question">Submit</button>

            </div>

            <a href="teacherLanding.blade.php" class="w3-bar-item w3-button">Account</a>

            <a href="welcome.blade.php" class="w3-bar-item w3-button">TutorTime Home</a>

            <a href="indexQuiz.blade.php?logout='1'" class="w3-bar-item w3-button">Logout</a>
        </div>
    </form>
</form>
</body>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>
</html>