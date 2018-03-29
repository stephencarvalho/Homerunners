<?php 
session_start();
if(!isset($_POST["description"]) && !isset($_POST["landmarks"])) echo "Not set";

		if( empty($_POST["description"]) && empty($_POST["landmarks"])) echo "Empty";
		 
		 $amenities=implode(',',$_POST['amenities']);
		 
		 $description = $_POST["description"];
		 $landmarks = $_POST["landmarks"];
		
		 include "php/script/config.php";
		
	



		 $postAdQry = "INSERT INTO `post_add`(`name`, `mobile_number`, `email`, `address`, `street`, `city`, `locality`, `state`, `country`, `zip_code`, `full_address`, `Bedrooms`, `Bathrooms`, `floor_no`, `total_floors`, `area`, `prop_type`, `crore`, `lacs`,`total_budget`, `fixed_negotiable`, `amenities`, `description`, `landmark`) VALUES ('".$_SESSION['name']."','".$_SESSION['mobile_number']."','".$_SESSION['email']."','".$_SESSION['address']."','".$_SESSION['street']."','".$_SESSION['city']."','".$_SESSION['locality']."','".$_SESSION['state']."','".$_SESSION['country']."','".$_SESSION['zip_code']."','".$_SESSION['full_address']."','".$_SESSION['Bedrooms']."','".$_SESSION['Bathrooms']."','".$_SESSION['floor_no']."','".$_SESSION['total_floors']."','".$_SESSION['area']."','".$_SESSION['prop_type']."','".$_SESSION['crore']."','".$_SESSION['lacs']."','".$_SESSION['total_budget']."','".$_SESSION['fixed_negotiable']."','".$amenities."','".$description."','".$landmarks."')";
		 if(!mysqli_query($con,$postAdQry))
		 {
		 		echo "".mysqli_error($con);
		mysqli_close($con);
		die("");
	
		 }
		  
    $last_id = mysqli_insert_id($con);
    $_SESSION['prop_id'] = $last_id;

		
echo "<script>window.location='postad.php#test3'</script>";
?>