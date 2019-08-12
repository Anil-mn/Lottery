<?php
include('conn.php');

$username=$_POST['name'];
$password=$_POST['pass'];

$query="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";
 

$result=mysqli_query($con,$query);
header('Location:../login.html');

?>