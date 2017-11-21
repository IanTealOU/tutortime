<?php
session_start();

// variable declaration
$answer = "";
$questions = "";
$correct = 0;
$name = "";
$course_name = "";
$errors = array();
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'tutortime1');

// Post Question
if (isset($_POST['reg_user'])) {
    // receive all input values from the form

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $questions = mysqli_real_escape_string($db, $_POST['questions']);
    $answer = mysqli_real_escape_string($db, $_POST['answer']);
    //$correct = mysqli_real_escape_string($db, $_POST['correct']);
    $course_name = mysqli_real_escape_string($db, $_POST['course_name']);

    // form validation: ensure that the form is correctly filled

    if (empty($questions)) {
        array_push($errors, "Your Question is Required");
    }
    if (empty($answer)) {
        array_push($errors, "An Answer is Required");
    }
    if (empty($course_name)) {
        array_push($errors, "A course name is required");
    }

    if ($correct = false) {
        array_push($errors, "Your answer is not correct");
    }


// insert question into database, what question?
    if (count($errors) == 0) {
        $query = "INSERT INTO questions (questions)
				  VALUES('$questions')";
        mysqli_query($db, $query);

        $_SESSION['questions'] = $questions;
        header('location: indexQuiz.blade.php');
    }


//  store answer if there are no errors in the form
    if (count($errors) == 0) {
        $query = "INSERT INTO answers (answer)
				  VALUES('$answer')";
        mysqli_query($db, $query);

        $_SESSION['answer'] = $answer;
        header('location: indexQuiz.blade.php');
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO course_name (questions)
				  VALUES('$course_name')";
        mysqli_query($db, $query);

        $_SESSION['course_name'] = $course_name;
        header('location: indexQuiz.blade.php');
    }
}


//post question stored by teacher	
if (isset($_POST['login_question'])) {
    $questions = mysqli_real_escape_string($db, $_POST['questions']);
//post answer stored by teacher
    $answer = mysqli_real_escape_string($db, $_POST['answer']);
//check errors
    if (empty($questions)) {
        array_push($errors, "You need to enter a Question");
    }

    if (empty($answer)) {
        array_push($errors, "You need to enter an answer");
    }
//store questions into db
    if (count($errors) == 0) { //0 errors
        $questions = "$qustions";//letuser input text
        $query = "SELECT * FROM questions WHERE questions= '$questions'";//save question as query
        $results = mysqli_query($db, $query);//results is the query

        if (mysqli_num_rows($results) == 0) {// if results are good, carry them over to another session

            $_SESSION['questions'] = $questions;

            $_SESSION['success'] = "That was the correct answer.";
        } else {
            array_push($errors, "Wrong Answer. Please try again.");
        }

        if (count($errors) == 0) {
            $answer = "answer";
            $query = "SELECT * FROM answers WHERE answer= '$answer'";

            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) {


                $_SESSION['name'] = $name;
                }
        }

    }
}