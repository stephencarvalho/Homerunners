<?php
	if(!isset($_POST["want"])  && !isset($_POST["loc"]) && !isset($_POST["bhk"]) && !isset($_POST["budget"]) && !isset($_POST["email"]) && 
    !isset($_POST["full_name"]) && !isset($_POST["telephone"])) {
    echo "NOthing is set";//check input or if it is set or var is define on server 
}
    if(empty($_POST["want"]) && empty($_POST["loc"]) && empty($_POST["bhk"]) && empty($_POST["budget"]) && empty($_POST["email"]) && empty($_POST["full_name"]) && empty($_POST["telephone"])) echo "Empty";//to check empty

    $want = $_POST["want"];// var define
    $loc = $_POST["loc"];
    $bhk = $_POST["bhk"];
    $budget = $_POST["budget"];
    $email = trim($_POST["email"]);
    $full_name = trim($_POST["full_name"]);
    $telephone = trim($_POST["telephone"]);
    
    include "config.php";//include connection
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
	$postPropQry="INSERT INTO `post_req`(`i_want_to`, `location`, `bhk`, `select_budget`, `email`, `full_name`, `telephone`) VALUES ('$want','$loc','$bhk','$budget','$email','$full_name','$telephone')";//insert in to qry db
   
	if(!mysqli_query($con,$postPropQry)){//fire query 
		echo "".mysqli_error($con);
		mysqli_close($con);
		die("");
	}

	 
     echo "<script>alert('Success!');</script>";
    
?>	