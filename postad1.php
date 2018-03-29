<?php

if(!isset($_POST["name"]) && !isset($_POST["mobile_number"]) && !isset($_POST["email"]) && !isset($_POST["street"]) && !isset($_POST["address"])  && !isset($_POST["city"]) && !isset($_POST["locality"]) && !isset($_POST["state"]) && !isset($_POST["country"]) && !isset($_POST["zip_code"]) && !isset($_POST['full_address']) && !isset($_POST["Bedrooms"]) && !isset($_POST["Bathrooms"]) && !isset($_POST["floor_no"]) && !isset($_POST["total_floors"]) && !isset($_POST["area"]) && !isset($_POST["prop_type"]) && !isset($_POST["crore"]) && !isset($_POST["lacs"])  && !isset($_POST["fixed_negotiable"])) echo "Not set";

		if(empty($_POST["name"]) && empty($_POST["mobile_number"]) && empty($_POST["email"]) && empty($_POST["street"]) && empty($_POST["address"])  && empty($_POST["city"]) && empty($_POST["locality"]) && empty($_POST["state"]) && empty($_POST["country"]) && empty($_POST["zip_code"]) && empty($_POST['full_address']) && empty($_POST["Bedrooms"]) && empty($_POST["Bathrooms"]) && empty($_POST["floor_no"]) && empty($_POST["total_floors"]) && empty($_POST["area"]) && empty($_POST["prop_type"]) && empty($_POST["crore"]) && empty($_POST["lacs"])  && empty($_POST["fixed_negotiable"])) echo "Empty";
session_start();
$cr = '0000000';
$lac = '00000';
$_SESSION['name'] = $_POST['name'];
$_SESSION['mobile_number'] = $_POST['mobile_number'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['street'] = $_POST['street'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['locality'] = $_POST['locality'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['zip_code'] = $_POST['zip_code'];
$_SESSION['full_address'] = $_POST['full_address'];
$_SESSION['Bedrooms'] = $_POST['Bedrooms'];
$_SESSION['Bathrooms'] = $_POST['Bathrooms'];
$_SESSION['floor_no'] = $_POST['floor_no'];
$_SESSION['total_floors'] = $_POST['total_floors'];
$_SESSION['area'] = $_POST['area'];
$_SESSION['prop_type'] = $_POST['prop_type'];
$_SESSION['crore'] = $_POST['crore'];
$_SESSION['lacs'] = $_POST['lacs'];
$_SESSION['total_budget'] = ($_POST['crore'].$cr)+($_POST["lacs"].$lac);

$_SESSION['fixed_negotiable'] = $_POST['fixed_negotiable'];
echo "<script>window.location='postad.php#test2'</script>";




 ?>
