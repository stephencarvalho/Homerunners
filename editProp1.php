<?php
if(!isset($_POST["name"]) && !isset($_POST["mobile_number"]) && !isset($_POST["email"]) && !isset($_POST["street"]) && !isset($_POST["address"])  && !isset($_POST["city"]) && !isset($_POST["locality"]) && !isset($_POST["state"]) && !isset($_POST["country"]) && !isset($_POST["zip_code"]) && !isset($_POST['full_address']) && !isset($_POST["Bedrooms"]) && !isset($_POST["Bathrooms"]) && !isset($_POST["floor_no"]) && !isset($_POST["total_floors"]) && !isset($_POST["area"]) && !isset($_POST["prop_type"]) && !isset($_POST["crore"]) && !isset($_POST["lacs"])  && !isset($_POST["fixed_negotiable"])) echo "Not set";
include "php/script/config.php";

session_start();

$name = $_POST['name'];
$mobile_number = $_POST['mobile_number'];
$email = $_POST['email'];
$address = $_POST['address'];
$street = $_POST['street'];
$city = $_POST['city'];
$locality = $_POST['locality'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip_code = $_POST['zip_code'];
$full_address = $_POST['full_address'];
$Bedrooms = $_POST['Bedrooms'];
$Bathrooms = $_POST['Bathrooms'];
$floor_no = $_POST['floor_no'];
$total_floors = $_POST['total_floors'];
$area = $_POST['area'];
$prop_type = $_POST['prop_type'];
$crore = $_POST['crore'];
$lacs = $_POST['lacs'];
$fixed_negotiable = $_POST['fixed_negotiable'];


		


	


 $postAdQry = "UPDATE `post_add` SET `name`='".$_POST['name']."',`mobile_number`='".$_POST['mobile_number']."',`email`='".$_POST['email']."',`address`='".$_POST['address']."',`street`='".$_POST['street']."',`city`='".$_POST['city']."',`locality`='".$_POST['locality']."',`state`='".$_POST['state']."',`country`='".$_POST['country']."',`zip_code`='".$_POST['zip_code']."',`full_address`='".$_POST['full_address']."',`Bedrooms`='".$_POST['Bedrooms']."',`Bathrooms`='".$_POST['Bathrooms']."',`floor_no`='".$_POST['floor_no']."',`total_floors`='".$_POST['total_floors']."',`area`='".$_POST['area']."',`prop_type`='".$_POST['prop_type']."',`crore`='".$_POST['crore']."',`lacs`='".$_POST['lacs']."',`fixed_negotiable`='".$_POST['fixed_negotiable']."' WHERE `id` = '".$_SESSION['edit_id']."' ";

		 if(!$postAdcheck = mysqli_query($con,$postAdQry))
		 {
		 		echo "".mysqli_error($con);
		mysqli_close($con);
		die("");
	
		 }
		 
	
    $last_id = mysqli_insert_id($con);
    
		
echo "<script>window.location='thankyou.html'</script>";




 ?>
