<?php

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AKA LOGISTICS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

<!--..............-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><h1>Track your</h1></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="#hero">Product</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <!--<li><a href="#contact">Feedback</a></li>-->
          <li><a href="admin/index_a.php">Admin</a>
            <ul>
              <li><a href="admin/index_a.php">Admin Login</a></li>              
            </ul>
            </li>

          <li><a href="admin/index_d.php">Dealer</a>
            <ul>
              <li><a href="admin/index_d.php">Dealer Login</a></li>              
            </ul>    
            </li> 
          
          <li><a href="admin/index_u.php">User</a>
            <ul>
              <li><a href="admin/index_u.php">User Login</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal">Registration</a></li>
            </ul>
          </li>

          

          <li class="menu-has-children"><a href="admin/location.html">Tracking</a></li>
          <li class="menu-has-children"><a href="www/index.html">APP</a></li>
          <li class="menu-has-children"><a href="">More</a>
           <ul> 
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#facts">Facts</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#team">Team</a></li>
                
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
    ============================-->


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" style="margin-right: 66%;"> Corporate Registration</h4>
          </div>
          <div class="modal-body">
           <form action="" method="post">
            <div class="form-group">
            <label for="email">User Id:</label>
              <input type="text" class="form-control" name="userid" id="email" required="">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password">
            </div>
             <div class="form-group">
              <label for="pwd">Company Name:</label>
              <input type="text" class="form-control" id="cname" name="Companyname">
            </div>
             <div class="form-group">
              <label for="pwd">Address:</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
             <div class="form-group">
              <label for="pwd">Company Code *:</label>
              <input type="text" class="form-control" id="c_code" name="companycode">
            </div>
            <button type="submit" class="btn btn-default" name="Corporate_register">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

  <?php

if(isset($_REQUEST['Corporate_register']))
{

  $user_id=$_REQUEST['userid'];
  $password=$_REQUEST['password'];
  $Companyname=$_REQUEST['Companyname'];
  $address=$_REQUEST['address'];
  $companycode=$_REQUEST['companycode'];

    $sql=mysqli_query($conn,"INSERT INTO `corporate` (`id`, `user_id`, `password`, `cname`, `address`, `c_code`) VALUES (NULL, '$user_id', '$password', '$Companyname`', '$address', '$companycode')");

    if($sql)
    {
      echo "<script>alert('your Company has been register successfully...');</script>";
    }
    else
    {
      echo "<script>alert('error');</script>";
    }
}

  ?>