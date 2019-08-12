<?php
require_once('conn.php');
SESSION_START();
$username = $_POST["username"];
$password = $_POST["pass"];
 $query = "select * from user where username = '$username' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
if(isset($check)){
 	    $_SESSION['username'] = $_POST['username'];
		
		 header('location: ../main.html');
		
	}
	else header('Location:../login.html');{
		
	}
