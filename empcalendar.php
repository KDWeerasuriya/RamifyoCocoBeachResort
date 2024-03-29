<!--Session start-->
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:Login.php');
}
?>

<!--Session end here-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Calendar</title>
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/hotel.png"/>
  <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel='stylesheet'/>
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <link href="assets/css/app-style.css" rel="stylesheet"/>
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
<!-- end loader -->
 
<!-- Start wrapper-->
<div id="wrapper">

  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar-auto-hide="true">
      <ul class="sidebar-menu">
        <li>
          <a href="employeedashbord.php">
            <i class="fa fa-th"></i><span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="empfoodgallery.php">
            <i class="fa fa-cutlery"></i><span>Food Gallery</span>
          </a>
        </li>
      
        <li>
          <a href="empcalendar.php">
            <i class="fa fa-calendar-check-o"></i><span>Calendar</span>
          </a>
        </li>
      </ul>
   </div>
   <!--End sidebar-wrapper-->

  <!--header start-->
  <?php
  include_once("includes/header.php");
  ?>
  <!--header end-->
  
  <!--Start topbar header-->
  <header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
      <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link toggle-menu" href="javascript:void();">
            <i class="icon-menu menu-icon"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <!--End topbar header-->
	
<div class="content-wrapper">
<div class="container-fluid">

<div class="mt-3">
  <div id='calendar'></div>
</div>
			
<!--start overlay-->
<div class="overlay toggle-menu"></div>
<!--end overlay-->	
			
</div><!-- End container-fluid-->
</div><!--End content-wrapper-->
   
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
	

</div><!--End wrapper-->


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <script src="assets/js/sidebar-menu.js"></script>
  <script src="assets/js/app-script.js"></script>
  <script src='assets/plugins/fullcalendar/js/moment.min.js'></script>
  <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
  <script src="assets/plugins/fullcalendar/js/fullcalendar-custom-script.js"></script>
	
</body>
</html>
