<?php


$prop_id = "18";


// Create connection
include "config.php";

$imgQry = "SELECT * FROM image WHERE prop_id='".$prop_id."'";
if(!$imgCheckQry = mysqli_query($con,$imgQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	

	mysqli_close($con);// close connection
	die("");
}
if(mysqli_num_rows($imgCheckQry)==0) {//check number of rows in login check
	//close connection
	echo "<script>alert('no rows ');</script>";
	
	mysqli_close($con);
	die("");
}
//session start

$getImg = mysqli_fetch_assoc($imgCheckQry);
?>

<html>
<body>
<?php do { 
	$imgName = $getImg['img_name'];


echo "<br>Before : ".$imgName."<br>";
$target='uploads/'.$imgName.'.jpeg';
echo "<br>After : ".$imgName."<br>";
?>
<img src="<?php echo $target;?>" alt="<?php echo $imgName?>" width="50%" height="50%">
<?php  } while($getImg = mysqli_fetch_assoc($imgCheckQry)) ?>
</body>
</html>

