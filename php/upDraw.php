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

$result =mysqli_query($con, "SELECT * FROM `draw` Where `name`='$tcname'");
               while($row = mysqli_fetch_row($result)){
                 $ser=$row[3];
                
                 
                }


$ticketname=$ser.'-'.$number;
echo $ticketname;
$query="UPDATE `draw` SET `Lwintc`='$ticketname' WHERE `name`='$tcname' ";



$result=mysqli_query($con,$query);
echo $result;
echo $query;
header('Location:../admin.php');
?>
