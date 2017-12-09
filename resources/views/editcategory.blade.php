<!DOCTYPE html>
<html>
<title>questionLogin</title>
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
    <header class="w3-panel w3-center w3-opacity" style="padding:128px 16px"></header>

</div>

<form method="post" action="addQuestion.blade.php">


</form>
<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.blade.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location:index.blade.php");
}
if (isset($_GET['categoryID'])) {
    $_SESSION['editcategory']['categoryID'] = $_GET['categoryID'];
}
if (!isset($_SESSION['editcategory']['name'])) {
    $editcat_sql = "SELECT * FROM category WHERE categoryID=" . $_GET['categoryID'];
    $editcat_query = mysqli_query($dbconnect, $editcat_sql);
    $editcat_rs = mysqli_fetch_assoc($editcat_query);
    $_SESSION['editcategory']['name'] = $editcat_rs['name'];
}
?>
<h1>Edit category</h1>
<form action="index.blade.php?page=editcategoryconfirm" method="post">
    <input name="name" value="<?php echo $_SESSION['editcategory']['name']; ?>"/>
    <input type="submit" name="update" value="Update"/>
</form>