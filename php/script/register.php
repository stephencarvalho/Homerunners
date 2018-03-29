<?php
	if(!isset($_POST["username"])  && !isset($_POST["email"]) && !isset($_POST["password"])){ 
        die("0");
    }
    //check input or if it is set or var is define on server 
    if(empty($_POST["username"]) && empty($_POST["email"]) && empty($_POST["password"]) ){ 
        die("1");
    }
    if (empty($_POST["email"])) {
    
 die("3");   
  }
    if(strlen($_POST['password'])<8)
{
    
    die("2");
}
    $username = trim($_POST["username"]);// var define
   
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  
      die("4");

    }

    
    include "config.php";//include connection
    $checkEmailExistQry = "SELECT `username` from `users`  where `username` = '".$username."'";// select email exist or no
    if(!$checkEmailExist = mysqli_query($con,$checkEmailExistQry)){//store result of $checkEmailExistQry in $checkEmailExist with mysqli_query (fire the query)
    	echo "".mysqli_error($con);//error
    	mysqli_close($con);//close
    	die("");//die
    }
    if(mysqli_num_rows($checkEmailExist)){
    	mysqli_close($con);
        
    	die("5");

    }
	$regInsertQry="INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username','$email','$password')";//insert in to qry db
   
	if(!mysqli_query($con,$regInsertQry)){//fire query 

		die("6");
	}
    session_start();
    $_SESSION['username'] = $username;
     $_SESSION['email'] = $email;
	 echo "".$_SESSION['username'];
     die("");
?>	