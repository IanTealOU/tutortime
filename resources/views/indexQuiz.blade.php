<?php
session_start();

if (!isset($_SESSION['questions'])) {
    $_SESSION['msg'] = "You must put in a question";
    header('location: questionLogin.blade.php');
}

if (!isset($_SESSION['course_name'])) {
    $_SESSION['msg'] = "You must put in a course name";
    header('location: questionLogin.blade.php');
}

if (isset($_GET['logout'])) {

    session_destroy();
    unset($_SESSION['questions']);
    header("location: questionLogin.blade.php");
}

?>

        <!DOCTYPE html>
<body>
    <title>Test Your Knowledge</title>
    <p> This is a multiple choice Quiz
    <p>

        <link rel="stylesheet" type="text/css" href="style.css">

        <div class="content">

            <!-- notification message -->
            <?php if (isset($_SESSION['questions'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['questions'];
                    unset($_SESSION['questions']);
                    ?>
                </h3>
            </div>
            <?php endif ?>

            <?php if (isset($_SESSION['course_name'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['course_name'];
                    unset($_SESSION['course_name']);
                    ?>
                </h3>
            </div>
            <?php endif ?>

        <!-- Questions -->
            <?php  if (isset($_SESSION['questions'])) : ?>
            <a href="studentQuiz.blade.php">Your Home Page</a>

    <p>Welcome <strong><?php echo $_SESSION['name']; ?></strong></p>

    <p><a href="indexStudent.blade.php?logout='1'" style="color: red;">logout</a></p>
    <?php endif ?>
    </div>

    </body>