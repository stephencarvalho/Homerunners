<?php
$email=$_POST["email"];
if(!isset($_POST["email"])&& !isset($_POST["password"])){
	die("0");
}
if(empty($_POST["email"])&& empty($_POST["password"])){
	die("1");
}
if (empty($_POST["password"])) {
	
	die("7");
}
if(strlen($_POST['password'])<8)
{
	die("2");
}
if (empty($_POST["email"])) {
	
	die("3");
}


	
	$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("");
}

$email = trim($_POST["email"]);// email
$password = trim($_POST["password"]);// password
//login check
include "config.php";// include connection 
$loginCheckQry = "SELECT * from `users` where `email` ='".$email."' and `password` = '".$password."'";//check query
if(!$loginCheck = mysqli_query($con,$loginCheckQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error

	mysqli_close($con);// close connection
	die("5");
}
if(mysqli_num_rows($loginCheck)==0) {//check number of rows in login check
	//close connection
	
	mysqli_close($con);
	die("6");
}
//session start

$getUser = mysqli_fetch_assoc($loginCheck);//to fetch the all rows in array  
mysqli_close($con);
session_start();
$_SESSION["username"] = $getUser["username"]; //Username Session 
$_SESSION["email"] = $getUser["email"];


echo "".$_SESSION['username'];
die("");


?>