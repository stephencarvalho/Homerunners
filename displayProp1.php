<?php 
		session_start();
		$email = $_SESSION["email"];
		
		include "php/script/config.php";
		$displayPropQry = "SELECT * from `post_add` WHERE `email` = '".$email."'";
		if(!$displayPropCheck = mysqli_query($con,$displayPropQry)){
			echo "".mysqli_error($con);
			mysqli_close($con);
			die("");
		}
		$count = mysqli_num_rows($displayPropCheck);
		if($count == 0){
			echo "<script>alert('No property found');</script>";
			die("");
		}
		
		$getProp = mysqli_fetch_assoc($displayPropCheck);
		$_SESSION['prop_id'] = $getProp['id'];
		$_SESSION['address'] = $getProp['address'];
		$address = $_SESSION['address'];
		mysqli_close($con);
		unset($con);

		
	  ?>