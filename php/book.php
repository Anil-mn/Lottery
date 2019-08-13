<?php
include('conn.php');

$name=$_POST['number'];
$tcname=$_POST['tcname'];
$number=$_POST['tcnumber'];

$query="INSERT INTO `book`(`phno`,`tcname`, `number`) VALUES ('$name','$tcname','$number')";

$result=mysqli_query($con,$query);
header('Location:../main.html');


?>

