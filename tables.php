

<?php




if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
$servername ="localhost";
$username = "root";
$password ="admin";
$dbname  = "fwdb";

$conn = new mysqli($servername, $username,$password,$dbname,3306);

$sql = "CREATE TABLE Category (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        category_name VARCHAR(60) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
sleep(2);
$sql1 = "CREATE TABLE Profession (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        job_name NVARCHAR(255),
        category_id INT,
    FOREIGN KEY (category_id) REFERENCES Category(id)
)";

sleep(2);
if ($conn->query($sql1) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sqldata = "INSERT INTO Category (category_name)
VALUES ('cars')";
if ($conn->query($sqldata) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqldata . "<br>" . $conn->error;
}
$sqldata = "INSERT INTO Profession (job_name,category_id)
VALUES ('parts',1)";

if ($conn->query($sqldata) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sqldata . "<br>" . $conn->error;
}

$conn->close();
?>