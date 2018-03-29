<?php
session_start();
$email = $_SESSION["email"];

include "php/script/config.php";
$displayPropQry = "SELECT * from `post_add` WHERE `email` = '".$email."'";
if(!$displayPropCheck = mysqli_query($con,$displayPropQry)){

	die("0");
}
$count = mysqli_num_rows($displayPropCheck);

if($count == 0){
	
  
  die("1");
 }
$getProp = mysqli_fetch_assoc($displayPropCheck);




$address = $getProp['address'];


?>



<!DOCTYPE html>
<html>
<head>
	<title>Property Display</title>

	<!--Import Google Icon Font-->
	<link href="css/googlefonts.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
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
	<?php include  "navbar3.php"; ?>

	



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
                          		<p><?php echo $getProp['address']." ".$getProp['id'] ?></p>			              
                          		<p>
                          			<div class="chip">Sale</div>
                          			<div class="chip"><?php echo $getProp['Bedrooms']."BHK"; ?></div>
                          			<div class="chip"><?php echo $getProp['area']."sq.Feet"; ?> </div>
                          			<div class="chip"><?php echo $getProp['prop_type']; ?></div>
                          		</p>
                          		<br>
                          	
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
                          	<div class="col s1">
                          		<a class="waves-effect waves-light btn-flat red white-text delete" id="<?=$getProp['id']?>" style="top: -19px;right: -47px;padding-right: 0px;padding-left: 10px;" ><i class="material-icons left">clear</i></a>
                          		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                          		<a class="btn-flat btn-large waves-effect waves-light black white-text" href="editProp.php?edit_id=<?="".$getProp['id'];?>" style="top: 0px; border-radius: 0%; left:8px;"><i class="material-icons">edit</i></a>
                          	</div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <?php } while($getProp = mysqli_fetch_assoc($displayPropCheck)) ?>

          <?php include  "php/pages/footer.php"; ?>
          <script type="text/javascript">
          	$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
     $(".delete").on('click',function(){
              var id = $(this).attr('id')
              swal({   title: "Are you sure?",   
                text: "You will not be able to recover this Property!",  
                 type: "warning",   showCancelButton: true,   
                 confirmButtonColor: "#DD6B55",   
                 confirmButtonText: "Yes, delete it!",   
                 cancelButtonText: "No, cancel plz!",   
                 closeOnConfirm: false,   closeOnCancel: false }, 
                 function(isConfirm){   if (isConfirm) 
                  {
                    $.get("deleteProp.php",{id:id},function(data){
                    if(data == '1')  
                    swal("Deleted!", "Your Property has been deleted.", "success");   
                   setTimeout(function() {
  window.location.href = "home1.php";
}, 2000);

                    })    
                  } else {     
                    swal("Cancelled", "Your Property  is safe :)", "error");   
                  } 
                });
            })
});
          	$(document).ready(function(){
          		$('.slider').slider({full_width: true});

          	});
           
          </script>

      </body>
      </html>
