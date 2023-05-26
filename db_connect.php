<?php 
$servername ="localhost";
$username = "root";
$password ="admin";
$dbname  = "fwdb";
$conn = mysqli_connect($servername, $username,$password,$dbname,3306);
if (!$conn) {
	echo "Connection failed!";
}

?>