<?php
$prop_id = $_GET['prop_id']; 
include "php/script/config.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Property Images</title>

  <!--Import Google Icon Font-->
  <link href="css/googlefonts.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){
      $('ul.tabs').tabs();
    });
  </script>
</head>
<body>

  <style type="text/css">


    .modal{
      width:1000px;
      height:1000px;
    }
    .blur img {
      -webkit-transition: all 1s ease;
      -moz-transition: all 1s ease;
      -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
      transition: all 1s ease;
    }

    .blur img:hover {
      -webkit-filter: blur(5px);
    }

  </style>
<script type="text/javascript">
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
     $('#modal4').openModal({
      dismissible: false
     });

  });
 

</script>
  </head>
<body>

   <?php include  "mapnav.php"; ?>
<div id="modal4" class="modal">

<a  onclick="goBack()" class="btn-floating btn-large waves-effect waves-light black" style="z-index: 999;"><i class="medium material-icons right">arrow_back</i></a>
		<div class="modal-content">
     
       
			<div class="slider fullscreen ">
        
				<ul class="slides">
					<?php
					$imgQry = "SELECT * FROM image WHERE prop_id = '".$prop_id."'"; 
                   if(!$imgCheckQry = mysqli_query($con,$imgQry)){// get query data and fire on connection
                             echo "".mysqli_error($con);//display error
                              mysqli_close($con);// close connection
                              die("");
                          }

                          $getImg = mysqli_fetch_assoc($imgCheckQry); do { 


                          	$imgName = $getImg['img_name'];
                          	$target='uploads/'.$imgName.'.jpeg';
                          	?>
                          	<li>
                          		<img src="<?php echo $target;?>" alt="<?php echo $imgName?>" ><!-- random image -->
                          		<div class="caption center-align">
                          			
                          			
                          		</div>
                          	</li>
                          	<?php  } while($getImg = mysqli_fetch_assoc($imgCheckQry)) ?>
                            
                          </ul>
                      </div>
                  </div>

</div>
  <script type="text/javascript">
  
            $(document).ready(function(){
              $('.slider').slider({full_width: true});

            });
          </script>

      </body>
      </html>
