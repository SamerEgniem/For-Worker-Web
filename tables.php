<?php
include "db_connect.php";



function CheckQuery($con,$data){
    if ($con->query($data) === TRUE) {
        echo "Table created successfully";
    }
}
function checkInsert($con,$data){
    if ($con->query($data) === TRUE) {
        echo "New record created successfully";
    }
}




    $sql = "CREATE TABLE IF NOT EXISTS Category (
        id INT(6) AUTO_INCREMENT PRIMARY KEY, 
        category_name VARCHAR(60) NOT NULL
        )";
    CheckQuery($conn, $sql);
    sleep(2);
    $sql1 = "CREATE TABLE IF NOT EXISTS Profession (
        id INT(6) AUTO_INCREMENT PRIMARY KEY,
        job_name VARCHAR(255),
        category_id INT,
        FOREIGN KEY (category_id) REFERENCES Category(id)
        )";

    CheckQuery($conn, $sql1);

    $sqldata = "INSERT INTO Category (category_name)
            VALUES ('Cars')";
    checkInsert($conn, $sqldata);
    $sqldata = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Parts',1)";
    checkInsert($conn, $sqldata);
    $sqldata = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Tires',1)";
    checkInsert($conn, $sqldata);
    $sqldata = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Wash',1)";
    checkInsert($conn, $sqldata);
    $sqldata = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Body',1)";
    checkInsert($conn, $sqldata);
    $sqldata2 = "INSERT INTO Category (category_name)
            VALUES ('House')";
    checkInsert($conn, $sqldata2);
    $sqldata2 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Carpenter',2)";
    checkInsert($conn, $sqldata2);
    $sqldata2 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Plumber',2)";
    checkInsert($conn, $sqldata2);
    $sqldata2 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Electricians',2)";
    checkInsert($conn, $sqldata2);
    $sqldata3 = "INSERT INTO Category (category_name)
            VALUES ('Yard')";
    checkInsert($conn, $sqldata3);
    $sqldata3 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Gardener',3)";
    checkInsert($conn, $sqldata3);
    $sqldata3 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Pergola',3)";
    checkInsert($conn, $sqldata3);
    $sqldata3 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Pool',3)";
    checkInsert($conn, $sqldata3);
    $sqldata4 = "INSERT INTO Category (category_name)
            VALUES ('construction')";
    checkInsert($conn, $sqldata4);
    $sqldata4 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Roofer',4)";
    checkInsert($conn, $sqldata4);
    $sqldata4 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Architect',4)";
    checkInsert($conn, $sqldata4);
    $sqldata4 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Civil Engineer',4)";
    checkInsert($conn, $sqldata4);
    $sqldata5 = "INSERT INTO Category (category_name)
            VALUES ('Tech')";
    checkInsert($conn, $sqldata5);
    $sqldata5 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('Laptops',5)";
    checkInsert($conn, $sqldata5);
    $sqldata5 = "INSERT INTO Profession (job_name,category_id)
            VALUES ('SmartPhones',5)";
    checkInsert($conn, $sqldata5);

//Worker Table
    $sql = "CREATE TABLE IF NOT EXISTS Worker (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    Worker_name VARCHAR(60) NOT NULL,
    Woker_Lastname VARCHAR(60) NOT NULL,
    password VARCHAR(255) NOT NULL ,
    Phone VARCHAR(20) NOT NULL,
    Worker_Description VARCHAR(60),
        Profession_id INT ,
    FOREIGN KEY (Profession_id) REFERENCES Profession(id),
    category_id INT ,
    FOREIGN KEY (category_id) REFERENCES Category(id)
    )";
    CheckQuery($conn, $sql);

//return $conn;
//$conn->close();//will never get here
?>
  