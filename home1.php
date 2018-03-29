<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "in_IN.utf8");
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html>
<head>
	<title>HomeRunners</title>
	<!--Import Google Icon Font-->
	<link href="css/googlefonts.css" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/navbar.css"/>
	<link type="text/css" rel="stylesheet" href="css/pagecont.css"/>
	<link type="text/css" rel="stylesheet" href="css/search.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<script src="js/materialize.min.js"></script> 
	<script src="js/nav_change.js"></script>
	<!-- This is what you need -->
	<script src="dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="dist/sweetalert.css">
	<!--.......................-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
</head>
<!-- ****************************BODY START***************************************-->    
<body>
	<style type="text/css">


	</style>
	<?php include  "php/pages/sidenav.php"; ?>
	<!-- __________________________NAV BAR START__________________________--> 
	<?php include  "php/pages/navbar.php"; ?>   
	<!-- ___________________________NAV BAR END___________________________--> 
	<!--____________________________ MODAL STRUCTURE______________________-->
	<?php include  "php/pages/modal.php"; ?>
	<!--____________________________ MODAL STRUCTURE______________________-->
	<!-- ________________________SEARCH BOX START______________________-->
	<?php include  "php/pages/search_box.php"; ?>
	<!-- ________________________SEARCH BOX END_________________________-->
	<!-- _______________________PAGE CONTENT START______________________-->
	<?php include "php/pages/center_promo.php" ?>

	<?php include "php/pages/projslider.php" ?>
	<!-- Localities -->
	<?php include "php/pages/localities.php" ?>
	<!-- Localities -->
	<?php include "php/pages/customerthink.php" ?>
	<!-- ________________________FOOTER START_________________________--> 
	<?php include "php/pages/footer.php" ?>

	<!-- _________________________FOOTER END__________________________--> 
	<script type="text/javascript" src="js/home1.js"></script>
	<script type="text/javascript">

		$("#loginbtn").on('click',function(){
			console.log("clicked");
	$.post("php/script/login.php",$("#form1").serializeArray(),function(data){
		switch(data){
			case '0':
				swal({   title: "Error!",   text: "Values are not set!",   type: "error",   confirmButtonText: "Ok" });
			break;
			case '1':
				swal({   title: "Error!",   text: "Enter all values!",   type: "error",   confirmButtonText: "Ok" });
			break;
			case '2':
				swal({   title: "Error!",   text: "Password is too short!",   type: "error",   confirmButtonText: "Ok" });
			break;
			case '3':
				swal({   title: "Error!",   text: "Enter email please !",   type: "error",   confirmButtonText: "Enter again ?" });
			break;
			case '4':
				swal({   title: "Error!",   text: "Enter valid email address!",   type: "error",   confirmButtonText: "Enter again?" });
			break;
			case '5':
				swal({   title: "Error!",   text: "Connection Error !",   type: "error",   confirmButtonText: "Try again!" });
			break;
			case '6':
				swal({   title: "Error!",   text: "Login is invalid !",   type: "error",   confirmButtonText: "Try again!" });
			break;
			case '7':
				swal({   title: "Error!",   text: "Enter Passowrd Please !",   type: "error",   confirmButtonText: "Try again!" });
			break;
			default :
				swal({   title: "Login sucessful",   text: "Welcome "+data+"!", imageUrl: "images/logohr.jpg", confirmButtonColor: "#DD6B55",   confirmButtonText: "OK",   closeOnConfirm: false}, function(isConfirm){if(isConfirm){location.reload()}});
				 //window.setTimeout(function(){location.reload()},3000)
			break;

		}
	})	
})
		$("#resetbtn1").on('click',function(){
			$("#form1")[0].reset();
		})
		$("#resetbtn").on('click',function(){
			$("#form2")[0].reset();
		})
		$("#signbtn").on('click',function(){
		$.post("php/script/register.php",$("#form2").serializeArray(),function(data){
			switch(data){
				case '0':
				swal({   title: "Error!",   text: "Values are not set!",   type: "error",   confirmButtonText: "Ok" });
			break;
			case '1':
				swal({   title: "Error!",   text: "Enter all values!",   type: "error",   confirmButtonText: "Ok" });
			break;
			case '2':
				swal({   title: "Error!",   text: "Password is too short!",   type: "error",   confirmButtonText: "Ok" });
			break;
			case '3':
				swal({   title: "Error!",   text: "Enter email please !",   type: "error",   confirmButtonText: "Enter again ?" });
			break;
			case '4':
				swal({   title: "Error!",   text: "Enter valid email address!",   type: "error",   confirmButtonText: "Enter again?" });
			break;
			case '5':
				swal({   title: "Error!",   text: "Email Already Exist  !",   type: "error",   confirmButtonText: "Try again!" });
			break;
			case '6':
				swal({   title: "Error!",   text: "Connection Error!",   type: "error",   confirmButtonText: "Try again!" });
			break;
			case '7':
				swal({   title: "Error!",   text: "Enter Passowrd Please !",   type: "error",   confirmButtonText: "Try again!" });
			break;
			default :
				swal({   title: "Signup sucessful",   text: "Welcome "+data+"!", imageUrl: "images/logohr.jpg", confirmButtonColor: "#DD6B55",   confirmButtonText: "OK",   closeOnConfirm: false}, function(isConfirm){if(isConfirm){location.reload()}});
				 //window.setTimeout(function(){location.reload()},3000)
			break;
				
			}
		})
	})
		     $(".disp").on('click',function(){
         $.post('displayProp.php',{data:0},function(data){
         	console.log(data);
            switch(data){
            	case '0' :
            	swal({   title: "Error!",   text: "Connection Error!!",   type: "error",   confirmButtonText: "Ok" });
                case '1':
                swal({   title: "Error!",   text: "No Property Found!!",   type: "error",   confirmButtonText: "Ok" });
           		break;
           		default :
           		window.location="displayProp.php";
                }

        })
    })
		         $(".delete").on('click',function(){

         	
          var id = $(this).attr('id')
              swal({   title: "Are you sure?",   
                text: "You will not be able to recover this account!",  
                 type: "warning",   showCancelButton: true,   
                 confirmButtonColor: "#DD6B55",   
                 confirmButtonText: "Yes, delete it!",   
                 cancelButtonText: "No, cancel plz!",   
                 closeOnConfirm: false,   closeOnCancel: false }, 
                 function(isConfirm){   if (isConfirm) 
                  {
                    $.get("deleteAcc.php",{id:id},function(data){

                    if(data == '1')  
                    swal("Deleted!", "Your Account has been deleted.", "success");   
                   setTimeout(function() {
  window.location.href = "php/script/logout.php";
}, 2000);

                    })    
                  } else {     
                    swal("Cancelled", "Your Property  is safe :)", "error");   
                              } 
                })
            });


		          $(".editpass").on('click',function(){

         	
          var id = $(this).attr('id')
              swal({   title: "Are you sure?",   
                text: "Change Passowrd ??!",  
                 type: "warning",   showCancelButton: true,   
                 confirmButtonColor: "#DD6B55",   
                 confirmButtonText: "Yes, Change it!",   
                 cancelButtonText: "No, cancel plz!",   
                 closeOnConfirm: false,   closeOnCancel: false }, 
                 function(isConfirm){   if (isConfirm) 
                  {
                    $.post("changePass.php",$("#form3").serializeArray(),function(data){
                    	console.log(data);
                    if(data == '4')  
                    swal("Deleted!", "Your account passowrd has been changed.", "success");   
                   setTimeout(function() {
  window.location.href = "home1.php";
}, 2000);  if (data == '3')
                  	swal("Cancelled", "Connection Error  :)", "error"); 
                  	 if (data == '0')
                  	swal("Cancelled", "Enter all values :(", "error"); 
                    if(data == '5') 
                  	swal("Cancelled", "Both Passowords are not matching  :( ", "error"); 
                    }) 
                     
                  }
                })
            });
            
  
		 

	</script>
</body>
</html>