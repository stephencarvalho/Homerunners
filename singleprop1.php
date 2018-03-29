<?php
session_start();
        
        include "php/script/config.php";
$id = $_GET['id'];

$singlePropQry = "SELECT * from `post_add` WHERE `id` = '".$id."' ";
if(!$singlePropCheck = mysqli_query($con,$singlePropQry)){
            echo "".mysqli_error($con);
            mysqli_close($con);
            die("");
        }
        $count = mysqli_num_rows($singlePropCheck);
        if($count == 0){
            echo "<script>alert('No property found');</script>";
            die("");
        }
        
        $getSingleProp = mysqli_fetch_assoc($singlePropCheck);
        mysqli_close($con);
        unset($con);
        $_SESSION['address'] = $getSingleProp['address'];
?>