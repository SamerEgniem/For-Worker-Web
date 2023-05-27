<?php 
$servername ="sql209.byethost5.com";
$username = "b5_34241873";
$password ="admin123";
$dbname  = "b5_34241873_forWorker";
$conn = new mysqli($servername, $username,$password,$dbname);
if (!$conn) {
	echo "Connection failed!";
}

?>