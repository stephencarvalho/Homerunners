<?php 
include "php/script/config.php";
$id = $_GET['id'];

$deleteQry = "DELETE FROM `post_add` WHERE `id` = '".$id."'";
if(!$deleteCheckQry = mysqli_query($con,$deleteQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	mysqli_close($con);// close connection
	die("0");
}
$deleteQry1 = "DELETE FROM `latlng` WHERE `prop_id` ='".$id."'";
if(!$deleteCheckQry1 = mysqli_query($con,$deleteQry1)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	mysqli_close($con);// close connection
	die("0");
}
$deleteimgQry = "DELETE FROM `image` WHERE `prop_id` ='".$id."'";
if(!$deleteCheckimgQry = mysqli_query($con,$deleteimgQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	mysqli_close($con);// close connection
	die("0");
}

die("1");

?>