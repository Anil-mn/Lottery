<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kerala Lottery</title>
    <script src="script.js"></script>
<body onload="load()">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                    <
                    <div class="navbar-menu-wrapper d-flex align-items-center">
                      <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                        <li class="nav-item active">
                          <a href="#29" class="nav-link"><i class="mdi mdi-image-filter"></i>Details of user</a>
                        </li>
                        <li class="nav-item">
                          <a href="#30" class="nav-link"><i class="mdi mdi-email-outline"></i>Draw</a>
                        </li>
                        
                      </ul>
                      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                      </button>
                    </div>
                  </nav>

                  <div class="row" id='29'>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Details</h4>
                  <p class="card-description">
                    Details of users <code></code>
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
            div class="row" id='29'>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">User Details</h4>
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
                        <th>Phone Number</th>
                        <th>Ticket Name</th>
                        <th>Ticket number</th>
                      </tr>
                    </thead>
                    <?php
                   while($row = mysqli_fetch_array($query))
                 { 
                 echo "<tr><td>".$row['id']."</td><td>".$row['phno']."</td><td>".$row['tcname']."</td><td>".$row['number']."</td></tr>"; 
                  }?>
                  </table>
                </div>
                </div>
                </div>