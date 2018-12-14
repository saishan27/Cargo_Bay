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
		
	$sname = $_POST["sname"];
	$sid = $_POST["sid"];
	$mail = $_POST["mail"];
	$passwd = $_POST["password"];
	$mobile = (int)$_POST["phone"];
	
		$sql = "INSERT INTO ser_provider (provider_id,provider_name,provider_password,mobile,email) 
		VALUES ('".$sid."','".$sname."','".$passwd."',
		'".$mobile."','".$mail."')"; 
		if ($conn->query($sql) === TRUE) {
			echo "Service Providers Account signup ccessfull";
		} else {
			echo "Error Creating Account: " . $conn->error;
		}
		
		$conn->close();
		
?>
	
	
			
				
				
