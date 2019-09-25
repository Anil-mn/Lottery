<?php

 SESSION_START();
 if(!isset($_SESSION['username'])){
	header('location:index.html');
 }
 else{
   $number=$_SESSION['username'];
    // echo $number ;
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head >
  <script src='java.js'></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kerala Lottery</title>
  <link href="images/icons/icon-google.png" rel="icon" type="image/png">
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/lottery.jpg" />
  <!-- Linking of javaScript-->
  </head>
<body onload='load()'>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="#"><img src="images/lottery.jpg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#book" class="nav-link"><i class="mdi mdi-image-filter"></i>BookTicket</a>
          </li>
          <li class="nav-item active">
            <a href="#draw" class="nav-link"><i class="mdi mdi-email-outline"></i>Draw</a>
          </li>
          <li class="nav-item">
            <a href="#ticket" class="nav-link"><i class="mdi mdi-calendar"></i>myTicket</a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">   
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
               <?php
               include('php/conn.php');
              $query = mysqli_query($con, "SELECT `username` FROM `user` where `number` = '$number' ");
              while ($row=mysqli_fetch_row($query)){
                echo "<div class='profile-image'> <img src='images/".$row[0].".jpg' alt='image'/> <span class='online-status online'></span> </div>" ;
            }

              ?> 
             <!-- <div class="profile-image"> <img src="images/AnilNambuthiripad.jpg" alt="image"/> <span class="online-status online"></span> </div>  -->
              <div class="profile-name">
               
                <?php

            include('php/conn.php');

            $query = mysqli_query($con, "SELECT `username` FROM `user` where `number` = '$number' ");
           while ($row=mysqli_fetch_row($query))
          {
             echo '<p class="name">'. $row[0].'</p>';
          }
?>                
                <p class="designation">User</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
                
              
              </div>
            </div>
            
          </li>
          <li class="nav-item"><a class="nav-link" href="#book"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">BookTicket</span></a></li>
          <li class="nav-item"><a class="nav-link" href="#ticket"><img class="menu-icon" src="images/menu_icons/02.png" alt="menu icon"><span class="menu-title">TicketInfo</span></a></li>
          <li class="nav-item"><a class="nav-link" onclick='one()'><img class="menu-icon" src="images/menu_icons/03.png" alt="menu icon"><span class="menu-title">profile</span></a></li>
          </li>
          <script>
          function load(){
            document.getElementById("nene").style.visibility='hidden';
          }
          function one(){
            
         document.getElementById("nene").style.visibility='visible';}
         </script> 
         <form  action="php/upload.php" method="post" id='nene' enctype="multipart/form-data">
               <input type="file"   name="fileToUpload" id="fileToUpload"><br>
                <input type="submit" class="file-upload-browse btn btn-info" value="Upload Image" name="submit">
              </form>
          <li class="nav-item purchase-button"><a class="nav-link" href="php/logout.php" >Logout</a></li>
        </ul>

        
      </nav>
      <!-- partial -->
      <div class="main-panel" id='book'>
        <div class="content-wrapper" >
          <div class="row" >
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Draw Lottery</h4>
                  <p class="card-description">
                    Lottery information <code></code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                  ?>
                  <table class="table">
                    <thead class="table-primary">
                      <tr>
                        <th>Lottery Name</th>
                        <th>series</th>
                        <th>last won ticket number</th>
                        <th>Win price</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = mysqli_fetch_array($query))
                 { 
                  $class = array("table-warning", "table-danger", "table-success","table-primary");
                  
                 echo "<tr><td >".$row['name']."</td><td>".$row['series']."</td><td class='table-danger'>".$row['Lwintc']."</td><td>".$row['win price']."</td></tr>"; 
                  }?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="cardclass='table-success'-title">Booked Ticket</h4>
                  <p class="card-description">
                    Tickets That u r Booked <code></code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `book` where `phno`=$number");

                  ?>
                  <table class="table table-hover">
                    <thead class="table-primary">
                      <tr>
                        <th>Name</th>
                        <th>ticket number</th>
                        <!-- <th>Draw date</th>
                        <th>Status</th> -->
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                   while($row = mysqli_fetch_array($query))
                 { 
                 echo "<tr ><td class='text-danger'>".$row['tcname']."</td><td class='badge badge-success'>".$row['number']."</td></tr>"; 
                  }?>

                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            

            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with Won Ticket and all information</h4>
                  <p class="card-description">
                    Add class <code>.table-{color}</code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                   $number=$_SESSION['username'];
                   $result = mysqli_query($con, "SELECT * FROM `book`");
                   

                   

                  ?>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                   
                        <th>
                         Ticket name
                        </th> <th>
                         Ticket Price
                        </th>
                        <th>
                          Ticket series
                        </th>
                        <th>
                          nextDrawDate
                        </th>
                        <th>
                          Win price
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                  
                    while($row = mysqli_fetch_array($query))
                 { 
                   
                   echo "<td >".$row['name']."</td><td>".$row['price']."</td><td>".$row['series']."</td><td>".$row['date']."</td><td>".$row['win price']."</td></tr>"; 
                  }?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
        
        



            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
              <form action='' method='POST'>
                <div class="card-body">
                  <h4 class="card-title" >Book Ticket</h4>
                  <p class="card-description" >
                   Select Ticket <code>.BookTicket</code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                  ?>
                 
                  <label for="exampleInputEmail1">Ticket name</label>
                  <select id='ticket'    name='tcname' class='form-control' aria-placeholder='ticket type'>
                
                  <?php
                  while($row = mysqli_fetch_array($query))
                 { 
                 echo "<option>".$row['name']."</option>" ;
                  }?>
                   </select>
                   <label id='bt' for="exampleInputEmail1">Ticket number</label>
                  <input type='text' minlength='5' maxlength='5' name='tnumber' id='tnum' required>         

                  <button type="submit"  name='check'  class="btn btn-success btn-fw">Check Price</button><br>
                </form>
                <?php
                include('php/conn.php');
                
                if(isset($_POST['check'])){
                  $ticketname=$_POST['tcname'];
                  $ticket=$_POST['tnumber'];
                  


               $result =mysqli_query($con, "SELECT * FROM `draw` Where `name`='$ticketname'");
               while($row = mysqli_fetch_row($result)){
                 $ser=$row[3];
                
                 
                }

                  $query = mysqli_query($con, "SELECT * FROM `book`");
                  while($row = mysqli_fetch_array($query)){
                    if($row['number']==$ser.'-'.$ticket){
                      $dem=$number;
                      echo "<p class='text-danger'   id='vai'>ticket is already booked </p>";
                      
                      break;
    
                }}
                if(isset($dem)){
                 
                }
                else{
                  
                  echo "<p class='text-success'  id='vai'>ticket is not yet booked </p>";
                }
              }

                ?>
               
                 
                </div>
              </div>
            </div>
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card"  id='mytic' >
                <div class="card-body"  style="background-image: url(images/lottery.jpg);background-size: cover; height:500px; " >
                <p class="card-description">
                    Click  <code>.BOOK</code>
                  </p>
                  <form action='php/book.php' method='POST'>
                <?php
                include('php/conn.php');
                if(isset($_POST['check'])){
                $ticketname =$_POST['tcname'];
                $ticketnumber=$_POST['tnumber'];
                echo "<h4 class='card-title' >".$ticketname."</h4>";
                echo "<input type='hidden' name='tcname' value='".$ticketname."'>";
                $query = mysqli_query($con, "SELECT * FROM `draw` Where `name`='$ticketname'");
                while($row = mysqli_fetch_row($query)){
                echo "<div class='form-group' >
                <p class='text-dark' style='font-size:50px ' id='Rupees'>ടിക്കറ്റ് വില ".$row[2]."</p>
                </div>";
                echo "<div class='form-group' >
                <p class='text-dark' style='font-size:50px' id='Rupees'>സമ്മാനത്തുക ".$row[4]."</p>
               </div>";
               $result =mysqli_query($con, "SELECT * FROM `draw` Where `name`='$ticketname'");
               while($row = mysqli_fetch_row($result)){
                 $ser=$row[3];
                }
              
               echo " <div class='form-group' >
               <p class='text-dark' name='tcnumber' id='vai2' style='margin-left: 16%;
                                 font-size:30px;margin-top:7%;'>".$ser."-".$ticketnumber."</p></div>";
                 
                 echo " <p class='text-dark' id='vai2' style='margin-left: 74%;
                 font-size:30px;margin-top:-5%;'>".$ser."-".$ticketnumber."</p>";
                  }
                  echo "<input type='hidden' name='tcnumber' value='".$ser."-".$ticketnumber."'>";
                }
                

                ?>
               
                              <button   type="submit" id='book' name='book'  class="btn btn-success btn-fw"
                              style="margin-left: 90%;
                                    margin-top:-20%;">Book</button>
                                     </form>
                </div>
              </div>
           </div>
            <!-- <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with Won Ticket and all information</h4>
                  <p class="card-description">
                    Add class <code>.table-{color}</code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                   $number=$_SESSION['username'];
                   $result = mysqli_query($con, "SELECT * FROM `book`");
                   

                   

                  ?>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                   
                        <th>
                         Ticket name
                        </th>
                        <th>
                          Ticket series
                        </th>
                        <th>
                          last won ticket number
                        </th>
                        <th>
                          Win price
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                  
                    while($row = mysqli_fetch_array($query))
                 { 
                   
                   echo "<td >".$row['name']."</td><td>".$row['price']."</td><td>".$row['Lwintc']."</td><td>".$row['win price']."</td></tr>"; 
                  }?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 
        </div> -->
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Anil MN <a href="http://www.bootstrapdash.com/" target="_blank"></a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">made with JavaScript and PHP <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src=".node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
