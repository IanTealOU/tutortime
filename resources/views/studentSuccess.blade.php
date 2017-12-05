<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.blade.php");
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