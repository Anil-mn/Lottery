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
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kerala Lottery</title>
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
<body >
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="images/lottery.jpg" alt="logo"/></a>
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
            <a href="#tick" class="nav-link"><i class="mdi mdi-calendar"></i>myTicket</a>
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
               // loading dp in profile
              $query = mysqli_query($con, "SELECT `username` FROM `user` where `number` = '$number' ");
              while ($row=mysqli_fetch_row($query))
             {
                
                echo "<div class='profile-image'> <img src='images/". $row[0].".jpg' alt='image'/> <span class='online-status online'></span> </div>" ;
             }

              ?> 
             <!-- <div class="profile-image"> <img src="images/AnilNambuthiripad.jpg" alt="image"/> <span class="online-status online"></span> </div>  -->
              <div class="profile-name">
               
                <?php

            include('php/conn.php');
             // loading user name in profile
            $query = mysqli_query($con, "SELECT `username` FROM `user` where `number` = '$number' ");
           while ($row=mysqli_fetch_row($query))
          {
             echo '<p class="name">'. $row[0].'</p>';
          }

?>
        <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href=""><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">BookTicket</span></a></li>
          <li class="nav-item"><a class="nav-link" href=""><img class="menu-icon" src="images/menu_icons/02.png" alt="menu icon"><span class="menu-title">TicketInfo</span></a></li>
          <li class="nav-item"><a class="nav-link" href=""><img class="menu-icon" src="images/menu_icons/03.png" alt="menu icon"><span class="menu-title">profile</span></a></li>
         
          </li>
          
          <li class="nav-item purchase-button"><a class="nav-link" href="php/logout.php" >Logout</a></li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel" id='book'>
        <div class="content-wrapper">
          <div class="row">
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
                    <thead>
                      <tr>
                        <th>Lottery Name</th>
                        <th id='price'> price</th>
                        <th>series</th>
                        <th>Win Price</th>
                        <th>draw date</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = mysqli_fetch_array($query))
                 { 
                 echo "<tr><td>".$row['name']."</td><td>".$row['price']."</td><td>".$row['series']."</td><td>".$row['win price']."</td><td>".$row['date']."</td></tr>"; 
                  }?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Booked Ticket</h4>
                  <p class="card-description">
                    Tickets That u r Booked <code></code>
                  </p>
                  <?php
				  include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `user`");
                  ?>
                 <table class="table">
                    <thead>
                      <tr>
                      <th>id</th>
                        <th>Username</th>
                        <th>Phone Number.</th>                        
                        <th>password</th>
                      </tr>
                    </thead>
                    <?php
                   while($row = mysqli_fetch_array($query))
                 { 
                 echo "<tr><td>".$row['id']."</td><td>".$row['username']."</td><td>".$row['number']."</td><td>".$row['password']."</td></tr>"; 
                  }?>
                   
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
              <form action='php/update.php' method='POST'>
                <div class="card-body">
                  <h4 class="card-title">Book Ticket</h4>
                  <p class="card-description">
                   Select Ticket <code>.BookTicket</code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                  ?>
                 
                  <label for="exampleInputEmail1">Ticket name</label>
                  <select id='ticket'   name='tcname' class='form-control' aria-placeholder='ticket type'>
                
                  <?php
                  while($row = mysqli_fetch_array($query))
                 { 
                 echo "<option>".$row['name']."</option>" ;
                  }?>
                   </select>
                   <label for="exampleInputEmail1">Select next draw Date</label>
                  <input type='date' name='tcnumber' id='tnum'>
                  <button type="submit"  name='check'  class="btn btn-success btn-fw">update</button><br>
                  <!-- <button type="submit" name='confirm'  class="btn btn-success btn-fw" >Confirm</button> -->
                </form>
                
               <?php
              
               
               ?>
                 
                </div>
              </div>
            </div>
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card" id='mytic' >
                <div class="card-body"   >
                <p class="card-description">
                    Details of Booked tickets <code></code>
                  </p>
                  <?php
				  include('php/conn.php');
                  $query = mysqli_query($con, "SELECT * FROM `book`");
                  ?>
                  <table class="table">
                    <thead>
                      <tr>
                      <th>id</th>
                        <th >Phone Number</th>
                        <th>Ticket Name</th>
                        <th>Ticket number</th>
                      </tr>
                    </thead>
                    <?php
                   while($row = mysqli_fetch_array($query))
                 { 
                 echo "<tr><td>".$row['id']."</td><td>".$row['phno']."</td><td>".$row['tcname']."</td ><td>".$row['number']."</td></tr>"; 
                  }?>
                  </table>
              </div>
            </div>
            </div>
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with contextual classes</h4>
                  <p class="card-description">
                    Add class <code>.table-{color}</code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                  ?>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                       
                        <th>
                          Ticket Name
                        </th>
                        <th>
                          last win Result
                        </th>
                      </tr>
                     
                    </thead>
                    <?php
                    while($row = mysqli_fetch_array($query))
                 { 
                 echo "<tr><td>".$row['name']."</td><td>".$row['Lwintc']."</td></tr>"; 
                  }?>
                    <tbody>
                  </table>
                </div>
              </div>
            </div>
        </div>  <br> <br> 
        
        
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card" id='mytic' >
              <form action='php/upDraw.php' method='Post'>
                <div class="card-body"   >
                <p class="card-description">
                    Details of Booked tickets <code></code>
                  </p>
                  <?php
				  include('php/conn.php');
                  $query = mysqli_query($con, "SELECT * FROM `book`");
                  ?>
                   <h4 class="card-title">Book Ticket</h4>
                  <p class="card-description">
                   Select Ticket <code>.BookTicket</code>
                  </p>
                  <?php
				           include('php/conn.php');
                   $query = mysqli_query($con, "SELECT * FROM `draw`");
                  ?>
                 
                  <label for="exampleInputEmail1">Ticket name</label>
                  <select id='ticket'   name='tcname' class='form-control' aria-placeholder='ticket type'>
                
                  <?php
                  
                  while($row = mysqli_fetch_array($query))
                 { 
                 echo "<option>".$row['name']."</option>" ;
                  }?>
                   </select>
                   <label for="exampleInputEmail1">Enter The won ticket number</label><br>
                  <input type='text' minlength='5' maxlength='5' name='tcnumber' id='tnum'><br>
                  <button type="submit" class="btn btn-success">
                  <i class="mdi mdi-cloud-download"></i>Update</button><br>
                 
                </form>
                
               <?php
              
               
               ?>
              </div>
            </div>
            </div>
            </form>
            </div>


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Anil MN <a href="http://www.bootstrapdash.com/" target="_blank"></a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made with JavaScript and PHP <i class="mdi mdi-heart text-danger"></i></span>
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
