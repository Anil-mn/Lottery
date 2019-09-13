<?php
 include('php/conn.php');
$ticketname ='pournami';
                  
$query = mysqli_query($con, "SELECT * FROM `draw` Where `name`='$ticketname'");
while($row = mysqli_fetch_row($query)){
  echo $row[2];
}


                   ?>