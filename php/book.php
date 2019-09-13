<?php
include('conn.php');
SESSION_START();
 if(!isset($_SESSION['username'])){
	header('location:admin.php');
 }
 else{
   $number=$_SESSION['username'];
    // echo $number ;
 }

$name=$_SESSION['username'];
$tcname=$_POST['tcname'];
$number=$_POST['tcnumber'];


$demo = mysqli_query($con, "SELECT * FROM `book`");
while($row = mysqli_fetch_array($demo)){
if($row['number']==$number){
  $dem=$number;
//echo $demo;
//header('Location:../profile.php');
break;
}
           
}
if(isset($dem)){ header('Location:../profile.php'); }  
else{echo 'done';
$query="INSERT INTO `book`(`phno`,`tcname`, `number`) VALUES ('$name','$tcname','$number')";
$result=mysqli_query($con,$query);
header('Location:../profile.php');
}

                   
              

?>

