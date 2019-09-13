<?php
include('conn.php');
SESSION_START();
 if(!isset($_SESSION['username'])){
	header('location:profile.php');
 }
 else{
   $number=$_SESSION['username'];
    // echo $number ;
 }

$name=$_SESSION['username'];
$tcname=$_POST['tcname'];
$number=$_POST['tcnumber'];
echo $tcname;
echo $number;


$query="UPDATE `draw` SET `date`='$number' WHERE `name`='$tcname' ";

$result=mysqli_query($con,$query);
echo $result;
echo $query;
header('Location:../admin.php');

            

?>

