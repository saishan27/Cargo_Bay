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
$sql = "CREATE TABLE ser_provider (
provider_id INT(10) PRIMARY KEY NOT NULL,
provider_name VARCHAR(30) NOT NULL,
provider_password VARCHAR(30) NOT NULL,
mobile INT(15) NOT NULL,
email VARCHAR(30) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table ser_provider created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 