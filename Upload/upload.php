<?php

session_start();
//$prop_id = $_SESSION['prop_id'];
$prop_id = $_SESSION['prop_id'];
$name = $_POST['img_name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
/*echo $target_dir."<br>";*/
/*echo $target_file."<br>";*/
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
/*echo $imageFileType."<br>";*/
$img_photo = addslashes (file_get_contents($_FILES['fileToUpload']['tmp_name']));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      
        $uploadOk = 1;
    } else {
        echo "<script>alert('File is not an image.')</script>";
        echo "<script>window.location='../postad.php#test3'</script>";
     die("");
        $uploadOk = 0;
    }
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
     echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed..');</script>";
     echo "<script>window.location='../postad.php#test3';</script>";
     die("");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
     echo "<script>alert('No file uploaded');</script>";
      echo "<script>window.location='../postad.php#test3';</script>";
     die("");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$target=rename($target_file,'../uploads/'.$prop_id.'.'.$name.'.jpeg');
        $target = $prop_id.".".$name;
    
        $_SESSION["name"] = $target;
        include "config.php";
		/*echo "<br><br>target".$target."<br><br>";
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."; */
        echo "<script>window.location='dbupload.php';</script>";
      

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?> 