<?php

// do not change any parameter here comment by tarik !!!
$user_name = $_POST['firstName'] ;
$email = $_POST['lastName'];
$password_ = $_POST['password'];
$hashed_password = password_hash($password_, PASSWORD_DEFAULT);

printf($user_name);

$conn = require __DIR__ . "/tables.php";



$sql = "INSERT INTO Worker(Worker_name,Woker_Lastname,password,Phone,Worker_Description,Profession_id,category_id)
VALUES (?,?,?,0543,'i work',1,1)";

$stmt1=$conn->prepare($sql);
$stmt1->execute([$user_name, $email, $hashed_password]);



?>