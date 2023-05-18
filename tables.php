<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql to create table

$table1 = "CREATE TABLE WORKER(
    id INT UNSIGNED AUTO_INCREAMENT PRIMARY KEY ,
    firstname VARCHAR(60),
    lastname VARCHAR(60),
    phonenumber VARCHAR(255),
    description VARCHAR(255),
    email VARCHAR(255),

)";

$table2 = "CREATE TABLE profession(
    id INT UNSIGNED AUTO_INCREAMENT PRIMARY KEY ,
    jobname VARCHAR(60),
  

)";

$table3 = "CREATE TABLE category(
    id INT UNSIGNED AUTO_INCREAMENT PRIMARY KEY ,
    categoryname VARCHAR(60),
  

)";

$table4 = "CREATE TABLE review(
    id INT UNSIGNED AUTO_INCREAMENT PRIMARY KEY ,
    credibility VARCHAR(60),
    Punctual  VARCHAR(60),
    proficiency VARCHAR(60),
    cost VARCHAR(60)

)";

$tables = [$table1, $table2, $table3,$table4];

foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}

foreach($errors as $msg) {
    echo "$msg <br>";
 }

    $conn->close();
    ?>
