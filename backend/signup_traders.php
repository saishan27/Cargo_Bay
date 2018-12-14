<?php 
		
	date_default_timezone_set('Asia/Kolkata');
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
		
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$mail = $_POST["mail"];
	$uname = $_POST["uname"];
	$passwd = $_POST["password"]
	$mob = $_POST["phone"]
	
		$sql = "INSERT INTO traders (username,firstname,lastname,temail,mobile,password) 
		VALUES ('".$uname."','".$fname."','".$lname."',
		'".$mail."','".$mob."','".$passwd."')"; 
	
		if ($conn->query($sql) === TRUE) {
			echo "Traders Account signup ccessfull";
		} else {
			echo "Error Creating Account: " . $conn->error;
		}
		
		$conn->close();
		
?>
	
	
			
				
				
