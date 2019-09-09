<?php
include('conn.php');

$username=$_POST['name'];
$password=$_POST['pass'];
$number=$_POST['number'];
$query="INSERT INTO `user`(`username`,`number`,`password`) VALUES ('$username','$number','$password')";

$result=mysqli_query($con,$query);
header('Location:../login.html');
?>