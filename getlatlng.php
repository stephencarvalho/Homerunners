<?php
	//$address = "B222, 3rd Floor, Near Shanti Ashram Bus Depot, Borivali (West), Mumbai";
	$address = $_POST['address'];
	$data = get_lat_long($address);
	echo $data;
	die("");
	function get_lat_long($address){

    $address = str_replace(" ", "+", $address);

    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false");
    $json = json_decode($json);

    $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    $data = array("latitude"=>''.$lat.'',"longitude"=>''.$long.'');
    return json_encode($data);
}
?>
