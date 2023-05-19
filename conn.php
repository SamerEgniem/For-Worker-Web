<?php
 $dbhost = 'localhost';
 $dbuser = 'b5_34241873';
 $dbpass = 't2cjf0q5';

 $conn = new mysqli($dbhost,$dbuser, $dbpass);

// Create connection
//$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "connection success";
// sql to create table

$sql = "INSTER INTO Category(ID,categoryname)
VALUES('1','cars')";
if($conn->query($sql)===TRUE){
  echo "new record added seccessfully";
}else{
  echo "error didnt add it";
}

$conn->close();


?>