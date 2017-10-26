<?php
$num1 = rand(1, 10); //random number between 1 to 10
$num2 = rand(1, 10); //random number between 1 to 10
$a = array("+","-","x","/"); //maths operands
$operand = array_rand($a,1); //randomly select any one opernad
$symbol = $a[$operand];
if(!isset($_COOKIE['num1']) && !isset($_COOKIE['num2']) && !isset($_COOKIE['symbol']) && !isset($_COOKIE['ans'])){
   setcookie("num1", $num1, time() + (86400 * 30), "/");
setcookie("num2", $num2, time() + (86400 * 30), "/");
setcookie("symbol", $symbol, time() + (86400 * 30), "/");
setcookie("ans", 0, time() + (86400 * 30), "/");
}
//display form
echo "<form action='' method='post'>";
if(isset($_COOKIE['num1']) && isset($_COOKIE['num2']) && isset($_COOKIE['symbol'])){
echo $_COOKIE['num1']." ".$_COOKIE['symbol']." ".$_COOKIE['num2']." = "."<input type='text' name='answer'> <input type='submit' name='submit'>";}
else{echo "<br/><br/><br/><br/>[Reload the page to get next question]";}
if(isset($_POST['submit'])) //if submit button clicked then calculate answer
{
$answer = $_POST["answer"];
if(isset($_COOKIE['num1']) && isset($_COOKIE['num2']) && isset($_COOKIE['symbol'])){
if($_COOKIE['symbol'] == "+"){
$_COOKIE["ans"] = $_COOKIE["num1"] + $_COOKIE["num2"];}
if($_COOKIE['symbol'] == "-"){
$_COOKIE["ans"] = $_COOKIE["num1"] - $_COOKIE["num2"];}
  
if($_COOKIE['symbol'] == "x"){
$_COOKIE["ans"] = $_COOKIE["num1"] * $_COOKIE["num2"];}
  
if($_COOKIE['symbol'] == "/"){
$_COOKIE["ans"] = $_COOKIE["num1"] / $_COOKIE["num2"];}
if($_COOKIE["ans"] == $answer){
echo "<br/><br/>Well done...Correct Answer !";}
else{
echo "<br/><br/>That was a wrong answer !";
echo "<br/><br/>Correct Answer is: ".$_COOKIE["ans"];
}
//delete all the cookies to store new values
if(isset($_COOKIE["num1"])) {
   unset($_COOKIE["num1"]); setcookie("num1", null, -1, '/');
}
if(isset($_COOKIE["num2"]) || $_COOKIE["num2"] == 0) {
   unset($_COOKIE["num2"]); setcookie("num2", null, -1, '/');
}
if(isset($_COOKIE["symbol"]) || $_COOKIE["symbol"] == "?") {
unset($_COOKIE["symbol"]); setcookie("symbol", null, -1, '/');
}
if(isset($_COOKIE["ans"]) || $_COOKIE["ans"] == 0) {
unset($_COOKIE["ans"]); setcookie("ans", null, -1, '/');
}}
echo "<br/><br/><br/><br/>[Reload the page to get next question]";
}
echo "</form>";
?>
