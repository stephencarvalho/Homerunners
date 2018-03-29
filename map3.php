
<?php
	include "php/script/config.php";
	$loc = $_POST['location'];  
	$a= array();
	$i=0;
	$qur = "SELECT * FROM `latlng` where address LIKE '%".$loc."%'";

	if(!$sql = mysqli_query($con,$qur)){// get query data and fire on connection
	  echo "".mysqli_error($con);//display error
	  mysqli_close($con);// close connection
	  die("");
	}
	if(mysqli_num_rows($sql)==0) {//check number of rows in login check
	  //close connection
	 echo "<script>alert('No Propery Found !!! ');</script>";
	 
	 mysqli_close($con);
	 echo "<script>window.location='home1.php';</script>";
	 die("");
	}
	//session start

	$row = mysqli_fetch_assoc($sql);

	while($row =mysqli_fetch_assoc($sql)){
	 $a[]=$row;
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Full Map</title>
<link rel="shortcut icon" href="images/favicon.ico">
  <style type="text/css">
	#map_wrapper {
	  height: 800px;
  }

  #map_canvas {
	  width: 100%;
	  height: 100%;
  }</style>
</head>
<body>
     <?php include  "mapnav.php"; ?>

	<div id="map_wrapper">
		<div id="map_canvas" class="mapping"></div>
	</div>

	<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript">
	  	var markers = $.parseJSON('<?=json_encode($a);?>');

	  	$(document).ready(function(){
	  		var script = $("<script>");
	  		script.attr("src","http://maps.googleapis.com/maps/api/js?key=AIzaSyAV2fp6BIUDh_tAayo3_YB7B29IALzEIZw&callback=initialize");
	  		$("body").append(script);
	  	});

		function initialize(){
			var map;
			var bounds = new google.maps.LatLngBounds();
			var mapOptions = {
				mapTypeId: 'roadmap'
			};
		  
			// Display a map on the page
			map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
			map.setTilt(45);
			map.center = new google.maps.LatLng(19.075984, 72.877656) ;
			 
			 
			// Display multiple markers on a map
			var infoWindow = new google.maps.InfoWindow();
			 
			
			// Loop through our array of markers & place each one on the map  
			$.each(markers,function(i,marker){
				var position = new google.maps.LatLng(marker['lat'], marker['lng']);
				bounds.extend(position);

				var mapMarker = new google.maps.Marker({
					 position: position,
					 map: map,
					 title: marker['address']
			 	});

				// Allow each marker to have an info window
				google.maps.event.addListener(mapMarker, 'click', (function(thisMarker, i) {
					return function() {
						var content = $('<div class="wrapper"><a class="info_content"></a></div>');
						content.find("a").attr("href",marker['link']).html(marker['address']);

						

						console.log(content.html());
						infoWindow.setContent(content.html());
						infoWindow.open(map, thisMarker);
					} 
				})(mapMarker, i));

				  // Automatically center the map fitting all markers on the screen
				  map.fitBounds(bounds);
			});



			 // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
			 var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
				this.setZoom(10);
				google.maps.event.removeListener(boundsListener);
			});
		}
	</script>
</body>
</html>