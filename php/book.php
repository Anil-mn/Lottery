<?php
include('conn.php');

$name=$_POST['name'];
$number=$_POST['number'];

$query="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";
 

$result=mysqli_query($con,$query);
header('Location:../login.html');

?>