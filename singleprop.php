<?php

include "singleprop1.php";
$prop_id = $_GET['id'];


// Create connection
include "php/script/config.php";

$imgQry = "SELECT * FROM image WHERE prop_id='".$prop_id."'";
if(!$imgCheckQry = mysqli_query($con,$imgQry)){// get query data and fire on connection
    echo "".mysqli_error($con);//display error
    

    mysqli_close($con);// close connection
    die("");
}

//session start

$getImg = mysqli_fetch_assoc($imgCheckQry);
unset($con);
include "php/script/config.php";
$ameQry = "SELECT `amenities` from `post_add` WHERE `id` = '".$id."'";
if(!$ameCheckQry = mysqli_query($con,$ameQry)){// get query data and fire on connection
    echo "".mysqli_error($con);//display error
    

    mysqli_close($con);// close connection
    die("");
}

//session start

$getAme = mysqli_fetch_assoc($ameCheckQry);
$amenitiesName = explode(",",$getAme['amenities']);
 $ameRow = count($amenitiesName)-1;



?>
<!DOCTYPE html>
<html>
<head>
    <title>Property Details</title>
    <!--Import Google Icon Font-->
    <link href="css/googlefonts.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>
<body>
    <style>
        .modal{
            width:1000px;
            height:1000px;
        }
        .font1
        {
            color:#757575;
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
.outline {
    border: 5px solid grey;
    
}
@-moz-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -moz-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -moz-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
@-webkit-keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
body {
  background: black;
}

.arrow {
    position: relative;
    bottom: -25px;
    left: 50%;
    margin-left: -20px;
    width: 50px;
    height: 80px;
    background-image: url(images/map.jpg);
    background-size: 50px 80px;
}

.bounce {
  -moz-animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  animation: bounce 2s infinite;
}

    </style>
    <?php include  "navbar3.php"; ?>
    <div id="modal3" class="modal">
        <div class="modal-content">
            <div class="slider fullscreen ">
                <ul class="slides">
                <?php do { 
    $imgName = $getImg['img_name'];
$target='uploads/'.$imgName.'.jpeg';
?>
                    <li>
                        <img src="<?php echo $target;?>" alt="<?php echo $imgName?>"> <!-- random image -->
                        <div class="caption center-align">
                            <h3><?php echo $imgName?></h3>
                            
                        </div>
                    </li>
<?php  } while($getImg = mysqli_fetch_assoc($imgCheckQry)) ?>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-bottom: 0px;
">
        <div class="col s10 offset-s1 ">
           <div class="card  grey lighten-4 ">
           <div class="outline">
                <div class="card-content ">
                    <div class="row">
                        <div class="col s4">
                            <a class=" modal-trigger" href="#modal3">
                                <div class="blur pic">
                                    <img src="<?php echo $target;?>" alt="<?php echo $imgName?>" height="252" width="320" style="border:5px solid grey;">
                                </div>
                            </a>
                        </div>
                        <div class="col s4 ">
                            <p><h4><?php echo $getSingleProp['Bedrooms']." BHK Flat"; ?></h4></p>
                            <p><h5><?php echo $getSingleProp['area']." Sq-Ft"; ?></h5></p>
                            <p><span class="font1"><?php echo $getSingleProp['address']; ?></span></p><br>
                            <hr style="background-color: grey; height: 1px; ">
                            <p>Bedroom &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="font1"><?php
                            if($getSingleProp['Bedrooms']==1){
                             echo $getSingleProp['Bedrooms']." Bedroom"; 
                            }else
                            {
                                    echo $getSingleProp['Bedrooms']." Bedrooms";}?></span>  </p>
                            
                            
                            <p>Bathrooms &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="font1"><?php  if($getSingleProp['Bedrooms']==1){
                             echo $getSingleProp['Bathrooms']." Bedroom"; 
                            }else
                            {
                                    echo $getSingleProp['Bathrooms']." Bathrooms";}?></span>   </p>
                            <p>Area &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="font1"><?php echo $getSingleProp['area']." Sq-Ft"; ?></span>  </p>
                            <p>Floor No &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="font1"><?php echo $getSingleProp['floor_no']; ?></span>  </p>
                            <p>Total Floors &nbsp&nbsp&nbsp&nbsp&nbsp <span class="font1"><?php echo $getSingleProp['total_floors']; ?></span>  </p>
                            <p>New/Resale &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <span class="font1"><?php echo $getSingleProp['prop_type']; ?> </span> </p>
                            <hr style="background-color: grey; height: 1px; ">
                        </div>
                        <div class="col s2">
                            <p><h4 style="color:red;"> &#8377;<?php echo $getSingleProp['crore'].".".$getSingleProp['lacs']; ?>Cr</h4></p>
                        </div>
                          <div class="col s2">
                          <a href="gmap1.php?address=<?="".$getSingleProp['full_address'];?>"  style="color:red;"><div class="arrow bounce">

                            </div></a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col s8 offset-s1">
                            <h4>Property Description</h4>
                            <p><span class="font1"><?php echo $getSingleProp['description']; ?></span></p>
                        </div>
                        
                    </div>
                    <hr style="background-color: grey; height: 1px; ">
                     <div class="row">
                        <div class="col s8 offset-s1">
                            <h4>Landmark</h4>
                            <p><span class="font1"><?php echo $getSingleProp['landmark']; ?></span></p>
                        </div>
                        
                    </div>
                    <hr style="background-color: grey; height: 1px; ">
                    <div class="row">
                        <div class="col s8 offset-s1">
                            <h4>Amenities</h4>
                            <div class="row">
                            <?php 
                            do {
                                    
                                     
                                    $target='images/'.$amenitiesName[$ameRow].'.gif';
                            ?>
                                <div class="col s1 ">

                                    <p><img src="<?php echo $target;?>"></p>
                                    <p><span class="font1"><?php echo $amenitiesName[$ameRow]; ?></span></p>
                                </div><?php  $ameRow--; } while(0 <= $ameRow) ?>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col s8 offset-s1">
                            <h4>Contact-For More Info</h4>
                            <div class="row">
                                <div class="col s4">
                                    <p>Name:&nbsp&nbsp&nbsp&nbsp<span class="font1"><?php echo $getSingleProp['name']; ?></span></p>
                                    <p>Mobile:&nbsp&nbsp<span class="font1"><?php echo $getSingleProp['mobile_number']; ?></span></p>
                                    <p>Email:&nbsp&nbsp&nbsp&nbsp<span class="font1"><?php echo $getSingleProp['email']; ?></span></p>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                      <hr style="background-color: grey; height: 1px; ">
                </div>
            </div>
        </div>
    </div>
    </div>
    <?php include  "php/pages/footer.php"; ?>
    <script type="text/javascript">
         $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
          $(document).ready(function(){
      $('.slider').slider({full_width: true});

    });
       
    </script>
</body>
