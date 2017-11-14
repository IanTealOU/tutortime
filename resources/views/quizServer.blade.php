<?php
session_start();

// variable declaration
$name = "";
$answer    = "";
$questions    = "";
$correct = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'tutortime1');

// Post Question
if (isset($_POST['reg_user'])) {
	// receive all input values from the form

	//$questions = mysqli_real_escape_string($db, $_POST['questions']);
	//$answer = mysqli_real_escape_string($db, $_POST['answer']);
	//$correct = mysqli_real_escape_string($db, $_POST['correct']); 
	
	if (count($errors) == 0) {
		$query = "INSERT INTO questions (questions, answer, correct) 
				  VALUES('$questions', '$answer', '$correct')";
		mysqli_query($db, $query);

		$_SESSION['questions'] = $questions;
		$_SESSION['success'] = $correct;
		$_SESSION['answer'] = $answer;

		}

	// form validation: ensure that the form is correctly filled
	if (empty($answer)) { array_push($errors, "You need to enter an answer"); }
	if ($answer_1 != $answer_2) {
		array_push($errors, "Sorry Your answer is wrong,please try again");	}

	//  student if there are no errors in the form
	if (count($errors) == 0) {
		$query = "INSERT INTO students (answer, questions, name) 
				  VALUES('$answer', '$questions', '$name')";
		mysqli_query($db, $query);

		$_SESSION['name'] = $name;
		$_SESSION['questions'] = $questions;
		$_SESSION['answer'] = $answer;
		$_SESSION['success'] = ('location: indexStudent.blade.php');
		header('location: indexQuiz.blade.php');
	}
}