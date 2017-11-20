<?php include('studentServer.blade.php') ?>
<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            background-image: url("desk.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .sticky{
            background-color: #FFFFA5;
            float: right;
            width: 15%;
            height: 250px;
            margin-top: 2%;
            margin-bottom: 10%;
            margin-right:20%;
            text-align: center;
            font: 15px arial, sans-serif;
        }
        .quiz{
            background-color: white;
            float: left;
            width: 37%;
            height: 800px;
            margin-top: 5%;
            margin-left: 10%;
            margin-bottom: 10%;
            font: 15px arial, sans-serif;
        }
        .card{
            background-color: white;
            float: right;
            position: relative;
            width:24%;
            margin-right: 15%;
            text-align: center;
            font: 15px arial, sans-serif;
        }
    </style>



</head>
<body>

<div class="sticky">
    <p>The sticky goes here</p>
</div>

<div class="quiz">
    <p>The quiz goes here</p>
</div>

<div class="card">
    <p>The flash card goes here</p>
</div>
</body>

</html>