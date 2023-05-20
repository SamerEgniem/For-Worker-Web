extension=php_mysqli.so

<?php

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
$servername ="localhost";
$username = "root";
$password ="admin";
$conn = new mysqli($servername, $username,$password);

if($conn->connect_error){
    die("Connection failed!". $conn->connect_error);

}else {
    echo "successful";
}
$conn->close();
?>