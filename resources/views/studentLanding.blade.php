<?php include('dbconnect.blade.php') ?>

        <!DOCTYPE html>
<html>
<title>studentLanding</title>
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
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
        <h1>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></h1>

        <div class="w3-padding-32">
            <div class="w3-bar w3-border">
                <a href="studentQuiz.blade.php" class="w3-bar-item w3-button">Testing</a>
                <a href="studentLanding.blade.php" class="w3-bar-item w3-button">Grades</a>
                <a href="index.blade.php?logout='1'" class="w3-bar-item w3-button">Logout</a>
                <p>
                    Go to: <a href="welcome.blade.php">TutorTime</a>
                </p>
            </div>
        </div>
    </header>


    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
    <div class="error success">
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif ?>

<!-- logged in teacher information -->
<?php  if (isset($_SESSION['username'])) : ?>
            
        <?php endif ?>


<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>

</body>
</html>