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
<?php include('dbconnect.blade.php') ?>

<div class="sticky">
    <!-- <p>The sticky goes here</p> -->


    <?php include('errors.blade.php'); ?>


    <a href="studentLanding.blade.php" class="w3-bar-item w3-button">Account</a>
    <a href="index.blade.php?logout='1'" class="w3-bar-item w3-button">Logout</a>


    </p>
    </form>
</div>

<div class="quiz">


    <ol>
        <li>

            <h3> <?php echo $_SESSION['question']; ?></h3>
            <div>
                <input type='radio' name='answer' id='correct' value='A'/><label for='answerA'>A) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer' id='correct' value='B'/><label for='answerB'>B) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer1c' id='correct' value='C'/><label for='answerC'>C) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer1d' id='correct' value='D'/><label for='answerD'>D) Correct</label>
            </div>
        </li>

        <!-- 2ND QUESTION -->


        <li>
            <h3> Question? </h3>
            <div>
                <input type='radio' name='answer2a' id='correct' value='A'/><label for='answerA'>A) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer2b' id='correct' value='B'/><label for='answerB'>B) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer2c' id='correct' value='C'/><label for='answerC'>C) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer3d' id='correct' value='D'/><label for='answerD'>D) Correct</label>
            </div>
        </li>

        <!-- 3rd QUESTION -->
        <li>
            <h3> Question? </h3>
            <div>
                <input type='radio' name='answer3a' id='correct' value='A'/><label for='answerA'>A) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer3b' id='correct' value='B'/><label for='answerB'>B) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer3c' id='correct' value='C'/><label for='answerC'>C) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer3d' id='correct' value='D'/><label for='answerD'>D) Correct</label>
            </div>
        </li>

        <!-- 4th QUESTION -->


        <li>
            <h3> Question? </h3>
            <div>
                <input type='radio' name='answer4a' id='correct' value='A'/><label for='answerA'>A) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer4b' id='correct' value='B'/><label for='answerB'>B) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer4c' id='correct' value='C'/><label for='answerC'>C) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer4d' id='correct' value='D'/><label for='answerD'>D) Correct</label>
            </div>
        </li>

        <!-- 3rd QUESTION -->
        <li>
            <h3> Question? </h3>
            <div>
                <input type='radio' name='answer5a' id='correct' value='A'/><label for='answerA'>A) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer5b' id='correct' value='B'/><label for='answerB'>B) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer5c' id='correct' value='C'/><label for='answerC'>C) Correct</label>
            </div>


            <div>
                <input type='radio' name='answer5d' id='correct' value='D'/><label for='answerD'>D) Correct</label>
            </div>
        </li>

        </form>


    <!--

        <div class="input-group">
            <h1>Your Question is:<h1> <h1><?php echo $_SESSION['questions']; ?></h1>
            <input type="text" name="questions" >
        </div>

    -->

        <div class="input-group">
            <a href="studentQuizN.blade.php">Submit</a>
        </div>
        </form>

        <?php if (isset($_SESSION['queston'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['question'];
                unset($_SESSION['question']);
                ?>
            </h3>
        </div>
        <?php endif ?>

    <!-- questions -->
        <?php  if (isset($_SESSION['question'])) : ?>
            
        <?php endif ?>


        <?php if (isset($_SESSION['question'])) : ?>
        <div class="error success">
            <h3>
                <?php
                echo $_SESSION['question'];
                unset($_SESSION['question']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- questions -->
    </ol><?php  if (isset($_SESSION['question'])) : ?>
            
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