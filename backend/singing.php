<?php
    $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "Cargo_Bay";
	$db = mysqli_connect($servername,$username,$password,$dbname);
// Create connection


   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $utype = $_POST["TYPE"]; 
      
      if($utype == "Traders"){

      $sql = "SELECT username FROM traders WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Traders.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   } else if($utype == Shippers){

      $sql = "SELECT provider_id FROM ser_provider WHERE provider_name = '$myusername' and provider_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: Shippers.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   

   }

  }
?>