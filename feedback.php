 <?php 
	include "php/script/config.php";
	$getFeedQry = "SELECT * from `feedback`";
	if(!$getFeedCheckQry = mysqli_query($con,$getFeedQry)){
		echo mysqli_error($con);
		echo mysqli_close($con);
		die("<script>alert('Connection Error !!!');</script>");
	}
/*	if(mysqli_num_rows($getFeedCheckQry) == 0){
		echo mysqli_error($con);
		echo mysqli_close($con);
		die("<script>alert('Connection Error !!!');</script>");
	}*/
	$getFeedback = mysqli_fetch_assoc($getFeedCheckQry);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>

	<!--Import Google Icon Font-->
	<link href="css/googlefonts.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.ico">

	<!--Import materialize.css-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	 <link type="text/css" rel="stylesheet" href="css/navbar.css"/>
	     <link type="text/css" rel="stylesheet" href="css/pagecont.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script> 
		<script src="dist/sweetalert-dev.js"></script>
	<link rel="stylesheet" href="dist/sweetalert.css">
	<script type="text/javascript" src="js/home1.js"></script>
	<style>
		.input-field label {
			color: #000;
		}
		/* label focus color */
		.input-field input[type=text]:focus + label {
			color: red;
		}
		.input-field input[type=tel]:focus + label {
			color: red;
		}
		.input-field input[type=email]:focus + label {
			color: red;
		}

		.input-field input[type=number]:focus + label {
			color: red;
		}
		.input-field textarea.materialize-textarea:focus + {
			color: red;
		}	
		

		/* label underline focus color */
		.input-field input[type=text]:focus {
			border-bottom: 1px solid #000;
			box-shadow: 0 1px 0 0 #000;
		}
		.input-field input[type=tel]:focus {
			border-bottom: 1px solid #000;
			box-shadow: 0 1px 0 0 #000;
		}
		.input-field input[type=email]:focus {
			border-bottom: 1px solid #000;
			box-shadow: 0 1px 0 0 #000;
		}
		
		.input-field input[type=number]:focus {
			border-bottom: 1px solid #000;
			box-shadow: 0 1px 0 0 #000;
		}

		input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea:focus {

			border-bottom: 1px solid #000;

		}
		textarea.materialize-textarea {
			background-color: transparent;
			border: none;
			border-bottom: 1px solid #000;
			border-radius: 0;
			outline: none;
			height: 3rem;
			width: 100%;
			font-size: 1rem;
			margin: 0 0 15px 0;
			padding: 0;
			box-shadow: none;
			box-sizing: content-box;
			transition: all .3s;
		}
		textarea.materialize-textarea:focus:not([readonly]){
			border-bottom: 1px solid #000;
			box-shadow: 0 1px 0 0 #000;

		}
		textarea.materialize-textarea:focus + label:not([readonly]){
			color: red;
		}

		input[type="radio"]:checked+label:after {

			border: 2px solid red;
			background-color: red;

		}
		label{
			color:black;
		}
		.dropdown-content li>a, .dropdown-content li>span {

			color: #black;

		}

		.select-wrapper input.select-dropdown {

			border-bottom: 1px solid #000;
		}
		.dropdown-content li>a, .dropdown-content li>span {

			color: #000;

		}
		input:not([type]):focus:not([readonly]), input[type=text]:focus:not([readonly]){
			border-bottom: 1px solid #000;
			box-shadow: 0 1px 0 0 #000;
		}
		[type="checkbox"]:checked+label:before {
			
			border-right: 2px solid red;
			border-bottom: 2px solid red;
			
		}
		hr {
			padding: 0;
			border: none;
			border-top:  1px dashed grey;
			color: #333;
			text-align: center;    
			font-size:12px;
		}
		hr:after {

			display: inline-block;
			position: relative; 
			top: -0.7em;  
			font-size: 1.5em;
			padding: 0 0.25em;
			background: white;
		}​
		 .logo
        {
            height:4rem;  
            vertical-align: middle;
        }
        .footer-copyright
        {
            border-top :1px solid #da251c !important;
            border: 10px;
            background-color: black;
        }
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            flex: 1 0 auto;
        }
        .navbar_bg_color
        {
            background-color: rgba(0,0,0,1);
            width: 100%;
        }
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	 <!-- ____________________________________________________NAV BAR START____________________________________________________--> 

    <?php include  "php/pages/navbar1.php"; ?>
    <?php include  "php/pages/modal.php"; ?>
    <!-- ____________________________________________________NAV BAR END____________________________________________________--> 
	<div class="row container" style="margin-top:110px;">
		<div class="col s10 offset-s1">
			<div class="card " style="border: 1px dashed red">
				<div class="card-content black-text">

					<style type="text/css">	
						  #hr3:after {
							content:"Send Us Your Success Story!!";
							font-weight: bolder;
						}
					</style>

					<hr id="hr3">
						
						<div class="row">
							<center>
									<form class="col s12" action="php/script/feedback.php" method="post">
									<div class="row">
										<div class="input-field col s6 offset-s3">

											<input id="name" type="text" name="name" class="validate" required>
											<label for="name">Name</label>
										</div>
									</div>
									<div class="row">

										<div class="input-field col s6 offset-s3">

											<input id="email" type="email" name="email" class="validate" required>
											<label for="email">Email Id</label>
										</div>
									</div>
									<div class="row">

										<div class="input-field col s6 offset-s3">

											<input id="tel" type="tel" name="number" class="validate" required>
											<label for="tel">Mobile/Telephone</label>
										</div>
									</div>
									<div class="input-field col s6 offset-s3">

										<input id="city" type="text" name="city" class="validate" required>
										<label for="city">City</label>
									</div>
								</div>


								<div class="row">
									<div class="input-field col s6	offset-s3">
										<textarea id="textarea1" name="feedback" class="materialize-textarea" required></textarea>
										<label for="textarea1">Feedback</label>
									</div>
								</div>

	<center><button class="btn waves-effect waves-light red" type="submit" id="feedbtn" name="action">Submit
									<i class="material-icons right">send</i>
								</button></center>	
								

							</div>
						</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row container">
	<div class="col s10 offset-s1">
		<div class="card " style="border: 1px dashed red">
		<style type="text/css">	
					.hr1:after {
						content:"Testimonials" !Important;
						font-weight: bolder;
					}
				</style>
				<HR class="hr1"/><br><br>
			<div class="card-content black-text">

				
				<?php do{ ?>
				<P><?php echo $getFeedback['feedback']; ?></P>

				<p><b>Regards</b></p>
				<p><?php echo $getFeedback['name']; ?></p>
				<p><?php echo $getFeedback['city']; ?></p>


			
			<style type="text/css">	
					.hr2:after {
						content:"";
						font-weight: bolder;
					}
				</style>
			<hr class="hr2">
			<?php }while($getFeedback = mysqli_fetch_assoc($getFeedCheckQry)) ?>
			</div>
		</div>
		
	</div>
</div>
<script type="text/javascript">
	$("#form_feedback").on('click',function(){
		$.post("php/script/feedback.php",$("#feedbtn").serializeArray(),function(data){
			switch(data){
				case '0' :
				swal({   title: "Error!",   text: "Values are not set!",   type: "error",   confirmButtonText: "Ok" });
			break;
			}
		})
	})
</script>


<!-- ____________________________________________________FOOTER START____________________________________________________--> 

<?php include "php/pages/footer.php" ?>
<!-- ____________________________________________________FOOTER END____________________________________________________--> 
</head>
</html>