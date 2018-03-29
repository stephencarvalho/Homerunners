<?php
	include "php/script/config.php";
	$address = 'borivali';
	$bhk = '2';
	$budget = '1000000000';
	$area = '700';
	$prop_type = 'Resale';
	$reqQry = "SELECT * FROM `post_req` WHERE  `bhk` = '".$bhk."' AND `budget` >= '".$budget."' AND `area1` >= '".$area."' AND `resale` LIKE '%".$prop_type."%'";
	if(!$reqCheckQry = mysqli_query($con,$reqQry)){
		echo mysqli_error($con);
		mysqli_close($con);
		die("");
	}
	if(mysqli_num_rows($reqCheckQry)==0){
		echo "gg";
		echo mysqli_error($con);
		mysqli_close($con);
		die("");
	}
	$getReqProp = mysqli_fetch_assoc($reqCheckQry);
	do{
		echo $getReqProp['locality1'];
	}while($getReqProp = mysqli_fetch_assoc($reqCheckQry));
?>