<?php 
include "php/script/config.php";
$loc = $_GET['loc'];

$showQry = "SELECT * from `post_add` where `address` LIKE '%".$loc."%'";
if(!$showCheckQry = mysqli_query($con,$showQry)){// get query data and fire on connection
	echo "".mysqli_error($con);//display error
	

	mysqli_close($con);// close connection
	die("");
}
if(mysqli_num_rows($showCheckQry)==0) {//check number of rows in login check
	//close connection
	echo "<script>alert('No property ');</script>";
	echo "<script>window.location='home1.php';</script>";
	mysqli_close($con);
	die("");
}
$getProp = mysqli_fetch_assoc($showCheckQry);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>

    <!--Import Google Icon Font-->
    <link href="css/googlefonts.css" rel="stylesheet">
    

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


   <?php include  "mapnav.php"; ?>
     
     
              <?php do { ?>


              <div class="row">
              	<div class="col s8 offset-s2 ">
              		<div class="card hoverable white"  href="singleprop.php?id=<?="".$getProp['id'];?>">
              			<div class="card-content black-text" style="padding-bottom: 0px;">
              				<span class="card-title"></span>
              				<?php 
              				$imgQry = "SELECT * FROM image WHERE prop_id = '".$getProp['id']."'"; 
                  if(!$imgCheckQry = mysqli_query($con,$imgQry)){// get query data and fire on connection
                             echo "".mysqli_error($con);//display error
                              mysqli_close($con);// close connection
                              die("");
                          }

                          $getImg = mysqli_fetch_assoc($imgCheckQry);
                          $imgName = $getImg['img_name'];
                          $target='uploads/'.$imgName.'.jpeg';?>
                          <div class="row">
                          	<div class="col s3">
                          		<a class=" modal-trigger" href="modal.php?prop_id=<?=$getProp['id'];?>">
                          			<div class="blur pic">
                          			<img src="<?php echo $target;?>" alt="<?php echo $imgName; ?>" style="height: 150px; width: 150px; border:5px solid grey;"> 
                          			</div>
                          		</a>
                          	</div>
                    <div class="col s6">
                        <p><b><h4><?php echo $getProp['Bedrooms']."BHK Apartment"?></h4></b></p>
                        <p><?php echo $getProp['address']; ?></p>                   
                      <p>
                        <div class="chip">Sale</div>
                        <div class="chip"><?php echo $getProp['Bedrooms']."BHK"; ?></div>
                        <div class="chip"><?php echo $getProp['area']."sq.Feet"; ?> </div>
                        <div class="chip"><?php echo $getProp['prop_type']; ?></div>
                        </p>
                        <br>
                <p><div class="chip white-text"style="background-color:black; "><u>Seller Info</u></div></p>
                <p>
                  <div class="chip"><?php echo $getProp['name']; ?></div> 
                  <div class="chip"><?php echo $getProp['mobile_number']; ?></div>
                  <div class="chip"><?php echo $getProp['email']; ?></div>
                </p>
                <br>
                <p>
                  <div class="chip"style="background-color:black; "><a href="gmap1.php?address=<?="".$getProp['full_address'];?>"> <i class="material-icons">location_on</i>View Map</a></div>
                        <div class="chip"style="background-color:black; "><a href="singleprop.php?id=<?="".$getProp['id'];?>">More Info...</a></div>
                        
                      </p>
                <br>
                    </div>
                    <div class="col s2">
                      <h3> &#8377;<?php echo $getProp['crore'].".".$getProp['lacs']; ?>Cr</h3>                       
                      

                  </div>
               
                  </div>
              </div>
               
        </div>
          </div>
    </div>
    <?php } while($getProp = mysqli_fetch_assoc($showCheckQry)) ?>
      
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
      </html>
