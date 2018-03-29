<?php
	if(!isset($_POST["locality1"])  && !isset($_POST["bhk"]) && !isset($_POST["budget"]) && !isset($_POST["area1"]) && !isset($_POST["resale"])) {
    echo "NOthing is set";//check input or if it is set or var is define on server 
}
    if(empty($_POST["locality1"]) && empty($_POST["bhk"]) && empty($_POST["budget"]) && empty($_POST["area1"])  && empty($_POST["resale"])) echo "Empty";//to check empty

    $locality1 = $_POST["locality1"];// var define
    $bhk=$_POST['bhk'];
    $budget = $_POST["budget"];
    $area1 = $_POST["area1"];
   
    $resale = trim($_POST["resale"]);
    
   
    
    
    include "php/script/config.php";//include connection
   // $checkEmailExistQry = "SELECT `username` from `users`  where `username` = '".$username."'";// select email exist or no
    /*if(!$checkEmailExist = mysqli_query($con,$checkEmailExistQry)){//store result of $checkEmailExistQry in $checkEmailExist with mysqli_query (fire the query)
    	echo "".mysqli_error($con);//error
    	mysqli_close($con);//close
    	die("");//die
    }
    if(mysqli_num_rows($checkEmailExist)){// checks email is already exist (mysqli_num_row = to check number of rows in db)
    	echo "<script>alert('Username already exist')</script>";
    	mysqli_close($con);
        
    	die("");

    }*/
	$searchPropQry="SELECT * from `post_add` where   `full_address` LIKE '%".$locality1."%' AND `Bedrooms` LIKE '%".$bhk."%' AND `total_budget` <= '".$budget."'  AND  `area` >= '".$area1."' AND  `prop_type` LIKE '%".$resale."%' ";//insert in to qry db
   
	
        if(!$searchPropCheck = mysqli_query($con,$searchPropQry)){
            echo "".mysqli_error($con);
            mysqli_close($con);
            die("");
        }
        $count = mysqli_num_rows($searchPropCheck);
        if($count == 0){
            echo "<script>alert('No property found');</script>";
            echo "<script>window.location='search_prop.php';</script>";
            die("");
        }
        
        $getProp = mysqli_fetch_assoc($searchPropCheck);
        $prop_id = $getProp['id'];
        mysqli_close($con);
        unset($con);
        


// Create connection
include "php/script/config.php";

$imgQry = "SELECT * FROM image WHERE prop_id='".$prop_id."'";
if(!$imgCheckQry = mysqli_query($con,$imgQry)){// get query data and fire on connection
    echo "".mysqli_error($con);//display error
    

    mysqli_close($con);// close connection
    die("");
}
if(mysqli_num_rows($imgCheckQry)==0) {//check number of rows in login check
    //close connection
    echo "<script>alert('no rows');</script>";
    
    mysqli_close($con);
    die("");
}
//session start

$getImg = mysqli_fetch_assoc($imgCheckQry);
        
      

	 
     
    
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
                        <p><b><h4><?php echo $getProp['Bedrooms']."BHK Apartment"; ?> </h4></b></p>
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
                    <div class="col s3">
                      <h3> &#8377;<?php echo $getProp['crore'].".".$getProp['lacs']; ?>Cr</h3>                       
                      

                  </div>
                  </div>
              </div>
               
        </div>
          </div>
    </div>
    <?php } while($getProp = mysqli_fetch_assoc($searchPropCheck)) ?>
      
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
