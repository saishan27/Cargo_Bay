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
$sql = "CREATE TABLE Ser_Provider (
provider_id INT(10) PRIMARY KEY,

)";

if ($conn->query($sql) === TRUE) {
    echo "Table tickets created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 