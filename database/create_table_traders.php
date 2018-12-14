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
$sql = "CREATE TABLE tickets (
ticket_id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
employee_id VARCHAR(10) NOT NULL,
email VARCHAR(50) NOT NULL,
summary VARCHAR(100) NOT NULL,
priority VARCHAR(10) NOT NULL,
reg_date TIMESTAMP,
due_date TIMESTAMP,
maintenance_id VARCHAR(10),
comment VARCHAR(100),
status VARCHAR(10) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table tickets created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 