<?php

	include "config.php";
	if(!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['number']) && !isset($_POST['city']) && !isset($_POST['feedback'])) 
		{
			echo "<script>alert('Values are not set');</script>";
			echo "<script>window.location='../../feedback.php';</script>";
			die("");
		}
	if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['number']) && empty($_POST['city']) && empty($_POST['feedback'])) 
		{echo "<script>alert('Values are empty');</script>";
			echo "<script>window.location='../../feedback.php';</script>";
			die("");
		}
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$number = trim($_POST['number']);
	$city = trim($_POST['city']);
	$feedback = $_POST['feedback'];

	$insFeedQry = "INSERT INTO `feedback`(`name`, `email`, `number`, `city`, `feedback`) VALUES ('$name','$email','$number','$city','$feedback')";
	if(!$insFeedCheck = mysqli_query($con,$insFeedQry)){
		 mysqli_close($con);
		 echo "<script>alert('Connection Error');</script>";
			echo "<script>window.location='../../feedback.php';</script>";
		die('3');
	}
	echo "<script>alert('Thankyou for feedback');</script>";
			echo "<script>window.location='../../feedback.php';</script>";
	
?>