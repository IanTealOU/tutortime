<?php include('dbconnect.blade.php') ?>

        <!DOCTYPE html>
<html>
<title>Teacher Landing</title>
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

        <div class="w3-padding-32">
            <div class="w3-bar w3-border">
                <a href="teacherClass.blade.php" class="w3-bar-item w3-button">Classroom</a>
                <a href="passwordReset.blade.php" class="w3-bar-item w3-button">Account</a>
                <a href="home.blade.php" class="w3-bar-item w3-button">TutorTime Home</a>
                <a href=".blade.php" class="w3-bar-item w3-button">Question Login</a>
                <a href="indexTeacher.blade.php?logout='1'" class="w3-bar-item w3-button">Logout</a>

            </div>
        </div>
    </header>
    <!-- End Page Content -->
</div>

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




<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large">
    <p>Powered by TutorTime</p>
</footer>

</body>
</html>