<?php
 SESSION_START();
 if(!isset($_SESSION['username'])){
	header('location:admin.php');
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
  <link rel="shortcut icon" href="images/favicon.png" />
  <!-- Linking of javaScript-->
  <script src="script.js"></script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="images/logo.svg" alt="logo"/></a>
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
          <li class="nav-item"><a class="nav-link" href="../../index.html"><img class="menu-icon" src="images/menu_icons/01.png" alt="menu icon"><span class="menu-title">BookTicket</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/widgets.html"><img class="menu-icon" src="images/menu_icons/02.png" alt="menu icon"><span class="menu-title">TicketInfo</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/ui-features/buttons.html"><img class="menu-icon" src="images/menu_icons/03.png" alt="menu icon"><span class="menu-title">profile</span></a></li>
         
          </li>
          
          <li class="nav-item purchase-button"><a class="nav-link" href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank">Log out</a></li>
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
                   $query = mysqli_query($con, "SELECT * FROM `book` where `phno`=$number");
                  

                  ?>
                  <table class="table table-hover">
                    <thead>
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
                 echo "<tr><td>".$row['tcname']."</td><td>".$row['number']."</td></tr>"; 
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
                   <label for="exampleInputEmail1">Ticket number</label>
                  <input type='text' name='tnumber' id='tnum'>
                  <button type="submit"  name='check'  class="btn btn-success btn-fw">Check Price</button><br>
                  <button type="submit" name='confirm'  class="btn btn-success btn-fw" >Confirm</button>
                </form>
                <?php
                include('php/conn.php');
                
                if(isset($_POST['check'])){
                  $ticketname=$_POST['tcname'];
                  $ticket=$_POST['tnumber'];
                  $query = mysqli_query($con, "SELECT * FROM `book`");
                  while($row = mysqli_fetch_array($query)){
                    if($row['number']==$ticket){
                      echo "<p class='text-success' id='vai'>ticket is already booked </p>";
                      break;
                    // }
                  }else
                  {
                      echo "<p class='text-success' id='vai'>ticket is not yet booked </p>";
                      break;
                  }
                }
              }

                ?>
               
                 
                </div>
              </div>
            </div>
           
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card" >
                <div class="card-body" style="background-image: url(images/lottery.jpg);background-size: cover; height:500px; " >
                <p class="card-description">
                    Click  <code>.BOOK</code>
                  </p>
                  <form action='' method='POST'>
                <?php
                include('php/conn.php');
                $ticketname =$_POST['tcname'];
                $ticketnumber=$_POST['tnumber'];
                echo "<h4 class='card-title' >".$ticketname."</h4>";
                $query = mysqli_query($con, "SELECT * FROM `draw` Where `name`='$ticketname'");
                while($row = mysqli_fetch_row($query)){
                echo "<div class='form-group' >
                <p class='text-dark' style='font-size:50px ' id='Rupees'>".$row[2]."</p>
                </div>";
                echo "<div class='form-group' >
                <p class='text-dark' style='font-size:50px' id='Rupees'>".$row[4]."</p>
               </div>";
               echo " <div class='form-group' >
               <p class='text-dark' id='vai2' style='margin-left: 18%;
                                 font-size:30px;margin-top:7%;'>".$ticketnumber."</p>";
                 
                 echo " <p class='text-dark' id='vai2' style='margin-left: 78%;
                 font-size:30px;margin-top:-5%;'>".$ticketnumber."</p>";
                  }

                ?>
                 </div>
                              <button type="submit"    class="btn btn-success btn-fw"
                              style="margin-left: 90%;
                                    margin-top:-20%;">Book</button>

            </form>
             
                 
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
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          #
                        </th>
                        <th>
                          First name
                        </th>
                        <th>
                          Product
                        </th>
                        <th>
                          Amount
                        </th>
                        <th>
                          Deadline
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-info">
                        <td>
                          1
                        </td>
                        <td>
                          Herman Beck
                        </td>
                        <td>
                          Photoshop
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr class="table-warning">
                        <td>
                          2
                        </td>
                        <td>
                          Messsy Adam
                        </td>
                        <td>
                          Flash
                        </td>
                        <td>
                          $245.30
                        </td>
                        <td>
                          July 1, 2015
                        </td>
                      </tr>
                      <tr class="table-danger">
                        <td>
                          3
                        </td>
                        <td>
                          John Richards
                        </td>
                        <td>
                          Premeire
                        </td>
                        <td>
                          $138.00
                        </td>
                        <td>
                          Apr 12, 2015
                        </td>
                      </tr>
                      <tr class="table-success">
                        <td>
                          4
                        </td>
                        <td>
                          Peter Meggik
                        </td>
                        <td>
                          After effects
                        </td>
                        <td>
                          $ 77.99
                        </td>
                        <td>
                          May 15, 2015
                        </td>
                      </tr>
                      <tr class="table-primary">
                        <td>
                          5
                        </td>
                        <td>
                          Edward
                        </td>
                        <td>
                          Illustrator
                        </td>
                        <td>
                          $ 160.25
                        </td>
                        <td>
                          May 03, 2015
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
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
