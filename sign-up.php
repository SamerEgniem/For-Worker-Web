<?php

// do not change any parameter here comment by tarik !!!
$user_name = $_POST['firstName'] ;
$lastname = $_POST['lastName'];
$password_ = $_POST['password'];
$phonenumber = $_POST['phone'];
$confirmpassword =$_POST['ConfirmPassword'];
$hashed_password = password_hash($password_, PASSWORD_DEFAULT);

if(!($password_ == $confirmpassword)){
    die("the password not matched!! try again");
}

printf($user_name);

$conn = require __DIR__ . "/tables.php";



$sql = "INSERT INTO Worker(Worker_name,Woker_Lastname,password,Phone,Worker_Description,Profession_id,category_id)
VALUES (?,?,?,?,'i work',1,1)";

$stmt1=$conn->prepare($sql);
$stmt1->execute([$user_name, $lastname, $hashed_password,$phonenumber]);

header('Location:Log-in.html');
exit();

?>