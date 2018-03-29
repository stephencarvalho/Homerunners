 <?php
session_start();
include "config.php";
$target = $_SESSION['name'];
$prop_id = $_SESSION['prop_id'];


 $imgQry = "INSERT INTO `image`(`prop_id`, `img_name`) VALUES ('$prop_id','$target')";
        if(!mysqli_query($con,$imgQry)){//fire query 
        echo "".mysqli_error($con);
        mysqli_close($con);
        die("");
    }
     echo "<script>alert('Image uploaded');</script>";
     echo "<script>window.location='../postad.php#test3'</script>";
            
?>