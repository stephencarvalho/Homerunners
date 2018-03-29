<?php
  session_start();
    
  $address = $_GET['address'];

?>
<!DOCTYPE html>
<html>
  <head>
  <title>Property Mapping</title>
  <link rel="shortcut icon" href="images/favicon.ico">
    <style>
      html { height: 100% }
body { height: 100%; margin: 0px; padding: 0px }


#map { width: 100%; height: 100% }
    </style>
  </head>
  <body>
     <?php include  "mapnav.php"; ?>
    <div id="map" class="offset-s2"></div>


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
var lat;
var lng;
$(document).ready(function(){
  
    var address = "<?=$address?>";
    $.post('getlatlng.php',{address:address},function(data){
      lat = data.latitude;
      lng = data.longitude;
      initMap();
      },'json') 

  
});  
      function initMap() {
            lat = parseFloat(lat);
            lng = parseFloat(lng); 
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 18,
              center: {lat:lat,lng:lng}
            });

            var marker = new google.maps.Marker({
              position: {lat:lat,lng:lng},
              map: map,
              
              animation: google.maps.Animation.BOUNCE,
              
            });  
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAV2fp6BIUDh_tAayo3_YB7B29IALzEIZw&callback=initMap"
        async defer></script>
  </body>
</html>