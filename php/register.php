<?php
include('conn.php');

$username=$_POST['name'];
$password=$_POST['pass'];

$query="INSERT INTO `book`(`name`, `number`) VALUES ('$name','$number')";
 

$result=mysqli_query($con,$query);
header('Location:../main.html');

?>