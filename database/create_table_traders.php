<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Cargo_Bay";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE traders (
username VARCHAR(30) PRIMARY KEY NOT NULL,
firstname VARCHAR(15) NOT NULL,
lastname VARCHAR(15) ,
temail VARCHAR(30) NOT NULL,
mobile INT(15) NOT NULL,
password VARCHAR(30) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table traders created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 