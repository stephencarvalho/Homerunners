<?php 
include "php/script/config.php";
session_start();
$email = $_SESSION['email'];

$deleteQry = "DELETE FROM `users` WHERE `email` = '".$email."'";
if(!$deleteCheckQry = mysqli_query($con,$deleteQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	mysqli_close($con);// close connection
	die("0");
}

$deleteQry1 = "DELETE FROM `post_add` WHERE `email` ='".$email."'";
if(!$deleteCheckQry1 = mysqli_query($con,$deleteQry1)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	mysqli_close($con);// close connection
	die("0");
}


echo "".$_SESSION['username'];
die("1");

?>