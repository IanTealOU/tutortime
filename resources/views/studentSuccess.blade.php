<<<<<<< HEAD
<?php include('dbconnect.blade.php') ?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1 {font-family: "Raleway", Arial, sans-serif}
    h1 {letter-spacing: 6px}
    .w3-row-padding img {margin-bottom: 12px}
</style>
<body>
<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.blade.php");
=======
<?php
if(!isset($_REQUEST['id'])){
    header("Location: index1.blade.php");
>>>>>>> tutorPractice
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Questions were Successfully Submitted</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Student </h1>
    <p>Your questions were submitted successfully. Student ID is #<?php echo $_GET['id']; ?></p>
</div>
</body>
</html>