<?php
$serverName = "localhost";//server name
$userName = "root";//username phpmyadmin
$pass = "root";//password for database
$dbName = "homerunners";//database
$con = mysqli_connect($serverName,$userName,$pass,$dbName);// to connect db 
if(!$con){
	echo "".mysql_error($con);//display error if connetion is not set
}
?>