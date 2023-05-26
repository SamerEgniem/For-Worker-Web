<?php
session_start();
include "de_connect.php";


echo "hello";

if(isset($_POST['phonenumber']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$phone_number= validate($_POST['phonenumber']);
	$pass= validate($_POST['password']);
	
	$sql = "SELECT *FROM Worker WHERE Phone = '$phone_number'";

	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)===1){
		$row = mysqli_fetch_assoc($result);
		if($row['Phone']===$phone_number){
		$hashedPassword =$row['password'];
		$first_name = $row['Worker_name'];
		$last_name = $row['Woker_Lastname'];
		
		$_SESSION['Worker_name']=$row['Worker_name'];
		$_SESSION['Woker_Lastname']=$row['Woker_Lastname'];
			if (password_verify($pass, $hashedPassword)) {
    // Password is incorrect
		header("location:index.html");
		exit();
}else{
	header("location:Log-in.html");
}
		
		
		
		
		
		}
	}
	
	

	
	
	if (password_verify($pass, $hashedPassword)) {
    // Password is incorrect
header("location:index.html");
} else{
	
	header("location:sign-in.html");
}
	if(mysqli_num_rows($result)){
		echo "hello";
	}
}else{
		
	header("location:sign-in.html");
	exit();
}



?>