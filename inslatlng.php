<?php
session_start();
    include "php/script/config.php";
	//$address = "B222, 3rd Floor, Near Shanti Ashram Bus Depot, Borivali (West), Mumbai";
	$address1 = $_SESSION['full_address'];
    $prop_id = $_SESSION['prop_id'];
    $address = $_SESSION['full_address'];
    $link = 'singleprop.php?id='.$prop_id;


	

	

    $address = str_replace(" ", "+", $address);

    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false");
    $json = json_decode($json);

    $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    $insQry = "INSERT INTO `latlng`(`address`, `lat`, `lng`,`link`,`prop_id`) VALUES ('$address1','$lat','$long','$link','$prop_id')";
    if(!$insCheckQry = mysqli_query($con,$insQry)){
        echo mysqli_error($con);
        mysqli_close($con);
        die("");
    }
    echo "<script>window.location='thankyou.html'</script>";
   
    

?>
