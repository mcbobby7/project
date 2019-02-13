<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	$conn= new mysqli($servername, 
						$username, 
						$password, 
						$dbname);
	if ($conn->connect_error) {

		die("connection went wrong: " . $conn->connect_error);
	}
// sql to create table
$sql = "CREATE TABLE panel ( 
    id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    stu_name VARCHAR(255) NOT NULL, 
    reg_num VARCHAR(255) NOT NULL , 
    dept VARCHAR(255) NOT NULL , 
    faculty VARCHAR(255) NOT NULL , 
    level VARCHAR(255) NOT NULL , 
    course VARCHAR(255) NOT NULL , 
    my_date VARCHAR(255) NOT NULL , 
    comment VARCHAR(255) NOT NULL , 
    invigilator_name VARCHAR(255) NOT NULL , 
    invigilator_id VARCHAR(255) NOT NULL
    );


    CREATE TABLE faculty ( 
    id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    stu_name VARCHAR(255) NOT NULL, 
    reg_num VARCHAR(255) NOT NULL , 
    dept VARCHAR(255) NOT NULL , 
    faculty VARCHAR(255) NOT NULL , 
    level VARCHAR(255) NOT NULL , 
    course VARCHAR(255) NOT NULL , 
    my_date VARCHAR(255) NOT NULL , 
    comment VARCHAR(255) NOT NULL , 
    invigilator_name VARCHAR(255) NOT NULL , 
    invigilator_id VARCHAR(255) NOT NULL
    );

    CREATE TABLE db ( 
    id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    stu_name VARCHAR(255) NOT NULL, 
    reg_num VARCHAR(255) NOT NULL , 
    dept VARCHAR(255) NOT NULL , 
    faculty VARCHAR(255) NOT NULL , 
    level VARCHAR(255) NOT NULL , 
    course VARCHAR(255) NOT NULL , 
    my_date VARCHAR(255) NOT NULL , 
    comment VARCHAR(255) NOT NULL , 
    invigilator_name VARCHAR(255) NOT NULL , 
    invigilator_id VARCHAR(255) NOT NULL,
    penalty VARCHAR(255) NOT NULL,
    duration VARCHAR(255) NOT NULL
    );

    CREATE TABLE complaint ( 
    id INT (11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    lec_name VARCHAR(255) NOT NULL, 
    lec_id VARCHAR(255) NOT NULL , 
    complaint VARCHAR(255) NOT NULL
    )";
if ($conn->query($sql) === TRUE) {
    echo "table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>