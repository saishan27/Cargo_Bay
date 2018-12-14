<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "drop database Cargo_Bay";
if (mysqli_query($conn, $sql)) {
    echo "Database droped successfully";
} else {
    echo "Error dropping database: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 