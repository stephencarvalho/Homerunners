<?php 

include "php/script/config.php";
session_start();
$email = $_SESSION['email'];
$new_password = $_POST['new_password'];
$again_password = $_POST['again_password'];
if(empty($_POST['new_password']) || empty($_POST['again_password'])){
	die("0");
}
if(strcmp($new_password,$again_password) !== 0){ 
	die('5');
}

$checkEmail = "SELECT * FROM `users` WHERE `email` = '".$email."'";
if(!$checkEmailCheck = mysqli_query($con,$checkEmail)){
	die('3');
}
$getId = mysqli_fetch_assoc($checkEmailCheck);
$id = $getId['id'];



$changePass = "UPDATE `users` SET `password`='$new_password' WHERE `id` = '".$id."'";
if(!$changePassCheck = mysqli_query($con,$changePass)){
	die('3');
}
die('4');
?>