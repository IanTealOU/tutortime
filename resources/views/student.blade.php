<?php
//This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.

    error_reporting(1);

#echo "Welcome Back, ".$_POST['username']."!";

    include("dbconnect.php");
    session_start();
    if(isset($_GET['logout'])) {
        unset($_SESSION['student']);
    }
    
    if(isset($_POST['iexist']) and $_POST['iexist']=='yes') {
        $logincust_sql="INSERT into `user` (username,password) VALUES ('".$_POST['username']."','".($_POST['password'])."')";
        $logincust_query=mysqli_query($dbconnect, $logincust_sql);
        #if(mysqli_num_rows($logincust_query)>0) {
        #   $logincust_rs=mysqli_fetch_assoc($logincust_query);
        #   $_SESSION['student']=$logincust_rs['username'];
        #} else {
        #   header("Location:index.php?page=student&error=logincust");
        #}
    }
?>
      <?php if(isset($_SESSION['student'])) {
        echo "<p>You're already logged in!</p>";
        } else {
        echo '<form action="index.php?page=student" method="post">
            <p>Username:<input name="username"></p>
            <p>Password:<input name="password" type="password"></p>
            <input type="hidden" name="iexist" value="yes">
            <p><input name="login" type="submit"></p>
        </form>';
        }
        ?>