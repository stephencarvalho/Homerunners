<?php
if(!isset($_POST["locality1"])  && !isset($_POST["bhk"]) && !isset($_POST["budget"]) && !isset($_POST["area1"])   && !isset($_POST["resale"])  && !isset($_POST["full_name"]) &&  !isset($_POST["telephone"]) && !isset($_POST["email"])) {
    die('0');//check input or if it is set or var is define on server 
}
    if(empty($_POST["locality1"]) || empty($_POST["bhk"]) || empty($_POST["budget"]) || empty($_POST["area1"])  || empty($_POST["resale"]) || empty($_POST["full_name"]) || empty($_POST["telephone"]) || empty($_POST["email"])) {
    die('1');//to check empty
}
    $locality1 = $_POST["locality1"];// var define
    $bhk= $_POST['bhk'];
    $budget = $_POST["budget"];
    $area1 = $_POST["area1"];
    $amenities= implode(',',$_POST['amenities']);
    $resale = $_POST["resale"];
    $full_name = trim($_POST["full_name"]);
    $telephone = trim($_POST["telephone"]);
    $email = trim($_POST["email"]);
    include "config.php";//include connection

	$postPropQry="INSERT INTO `post_req`(`locality1`, `bhk`, `budget`, `area1`, `amenities`, `resale`, `full_name`, `telephone`, `email`) VALUES ('$locality1','$bhk','$budget','$area1','$amenities','$resale','$full_name','$telephone','$email')";//insert in to qry db

	if(!mysqli_query($con,$postPropQry)){//fire query 
		
		die("2");
	}


    $postQry = "SELECT * from `post_add` WHERE `full_address` LIKE '%".$locality1."%' AND `Bedrooms` = '".$bhk."' AND `total_budget` <= '".$budget."' AND `area` >= '".$area1."' AND `prop_type` LIKE '%".$resale."%'";
    if(!$postCheckQry = mysqli_query($con,$postQry)){
     
        die("3");
    }
    $rowCount = mysqli_num_rows($postCheckQry);
    if($rowCount == 0){
     
        die("4");
    }
$getFoundProp = mysqli_fetch_assoc($postCheckQry);
    do{
       
       $to      = $email;
    $subject = 'Property Found';
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: support@homerunners.esy.es' . "\r\n" .
    'Reply-To: support@homerunners.esy.es' . "\r\n";
    $message = '<html><head><body>';
    $message .= '<div class="row">';
    $message .= '<div class="col s10  offset-s1 ">';
    $message .= '<div style="background-color: white;padding: 30px;border:5px solid grey;width: 1200px;">';
    $message .= '<div >';
    $message .= '<span font-size="2rem"><font size="6rem">Property Match Found</font></span><br><br>';
    $message .= '<div style="border:1px solid red ;padding: 20px;">';
    $message .= '<p style="font-weight: bold;">'.$getFoundProp['Bedrooms']. 'BHK Flat in '.$getFoundProp['full_address'].'</p>';
    $message .= '<table>';
     $message .= '<tr>';
    $message .= ' <td >Name:</td>';
    $message .= '<td style="color: #424242 ;">'.$getFoundProp['name'].'</td>';
    $message .= '</tr>';
    $message .= '<tr>';
    $message .= '<td>Contact:</td>';
    $message .= '<td style="color: #424242 ;">'.$getFoundProp['mobile_number'].'</td>';
    $message .= '</tr>';
    $message .= '<tr>';
    $message .= '<td>Email:</td>';
    $message .= '<td style="color: #424242 ;">'.$getFoundProp['email'].'</td>';
    $message .= '</tr>';

    $message .= '</table>';
    $message .= '<br>';
    $message .= '<a href="#">View Property Details</a>';
    $message .= '</div>';
    $message .= '<br><br>';
    $message .= '</div>';

    $message .= '</div>';

    $message .= '</body></html>';
  

    mail($to, $subject, $message, $headers);

    }while($getFoundProp = mysqli_fetch_assoc($postCheckQry));
   



    
    
    
    
    ?>	