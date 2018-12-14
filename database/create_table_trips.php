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
$sql = "CREATE TABLE trips (
trip_id INT(20) AUTO_INCREMENT NOT NULL,


)";

if ($conn->query($sql) === TRUE) {
    echo "Table trips created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 