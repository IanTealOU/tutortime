<?php include('quizServer.blade.php') ?>
        <!DOCTYPE html>
<html>
<head>

    <style>
        body {
            background-image: url("desk.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .sticky {
            background-color: #FFFFA5;
            float: right;
            width: 15%;
            height: 225px;
            margin-top: 2%;
            margin-bottom: 10%;
            margin-right: 20%;
            text-align: center;
            font: 15px arial, sans-serif;
        }

        .quiz {
            background-color: white;
            float: left;
            width: 37%;
            height: 800px;
            margin-top: 5%;
            margin-left: 10%;
            margin-bottom: 10%;
            font: 15px arial, sans-serif;
        }

        .card {
            background-color: white;
            float: right;
            position: relative;
            width: 24%;
            height: 300px;
            margin-right: 15%;
            text-align: center;
            font: 15px arial, sans-serif;
        }
    </style>


</head>
<body>

<div class="sticky">
    <!-- <p>The sticky goes here</p> -->
    <form method="post" action="studentQuiz.blade.php">

        <?php include('errors.blade.php'); ?>

        <h1>Welcome <strong><?php echo $_SESSION['name']; ?></strong></h1>
    <!-- <h1>Your Question is: <strong><?php echo $_SESSION['questions']; ?></strong></h1> -->

        <a href="studentLanding.blade.php" class="w3-bar-item w3-button">Account</a>
        <a href="indexStudent.blade.php?logout='1'" class="w3-bar-item w3-button">Logout</a>

        </p>
    </form>
</div>

<div class="quiz">
    <h1> English * Level 1</h1>
        <h1> Question #1</h1>

        <?php include('errors.blade.php'); ?>

        <!--      <h1>Your Question is: <strong><?php echo $_SESSION['questions']; ?></strong></h1> -->

            <div class="input-group">
                <h1> 1. What is a Thesaurus? </h1>
                <h1>a. A list of synonyms for words.</h1>

                        <h1>b. A type of dinosaur</h1>

                        <input type="text" name="answer">
            </div>

            <div class="input-group">
                <a href="studentQuizS.blade.php">Submit</a>
            </div>

            </form>

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

        <!-- questions -->
            <?php  if (isset($_SESSION['answer'])) : ?>
            
        <?php endif ?>


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

        <!-- questions -->
    <?php  if (isset($_SESSION['questions'])) : ?>
            
        <?php endif ?>


</div>

<div class="card">
    <!-- <p>The flash card goes here</p> -->
    <form method="post" action="studentLanding.blade.php">

    <!-- <?php include('errors.blade.php'); ?>-->


        <div class="input-group">
            <h1> Choose your next Subject:</h1>
            <input type="text" name="name">
        </div>

        <div class="input-group">
            <a href="studentQuiz.blade.php">Next</a>
        </div>

        <p>
        <p>

        </p>
    </form>
</div>
</body>

</html>