<?php
session_start();

$conn=require_once("tables.php");

$myphonenumber = $_POST['phonenumber'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phonenumber = mysqli_real_escape_string($conn, $_POST['phonenumber']);
    $password_ = trim($_POST['password']);

    $sql = "SELECT * FROM Worker WHERE Phone = '$phonenumber'";

    $sql1 = "SELECT Worker_name FROM Worker WHERE Phone = '$phonenumber'";

    $result = mysqli_query($conn, $sql);
    $username = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($username) == 1) {

        // Storing username in session variable
        $_SESSION['Worker_name'] = $username;
    }
    if ($result) {
        // Query executed successfully, handle the result here
        // ...

        header("Location: index.html");
        exit();
    } else {
        // Query execution failed, handle the error here
        $error = mysqli_error($conn);
        exit("Query execution error: $error");
    }
} else {
    exit('Please fill both the username and password fields!');
}





?>