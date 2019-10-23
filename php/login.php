<?php
require_once('conn.php');// connection to localhost
SESSION_START();
$number = $_POST["username"];
$password = $_POST["pass"];

if($username =='admin' && $password=='admin'){
	header('location: ../admin.php');
}
else{
 $query = "select * from user where number = '$number' and password = '$password'";
 $result = mysqli_query($con, $query);
 $check = mysqli_fetch_array($result);
if(isset($check)){
 	    $_SESSION['username'] = $_POST['username'];
		if($_POST['username']=='admin'){
		 header('location: ../admin.php');}
		 else{header('location: ../profile.php');}
		
	}
	
	    else{
			echo "<script>alert('wrong password')</script>";
			header('Location:../index.html');
	}
}