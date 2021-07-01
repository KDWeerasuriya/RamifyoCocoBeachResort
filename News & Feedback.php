<!--Session start-->
<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:Login.php');
}
?>
<!--Session end-->

<!--database connection-->
<?php
include_once("includes/dbconnection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin Dashboard</title>

  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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

<!-- Start wrapper-->
<div id="wrapper">
 
<!-- Start wrapper-->
<div id="wrapper">

<!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar-auto-hide="true">
    <ul class="sidebar-menu do-nicescrol">
      <li>
        <a href="admindashbord.php">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="foodgallery.php">
        <i class="zmdi zmdi-grid"></i> <span>Food Gallery</span>
        </a>
      </li>
    
      <li>
        <a href="News & Feedback.php">
        <i class="zmdi zmdi-calendar-check"></i> <span>News & Feedback</span>
        </a>
      </li>

      <li>
      <a href="calendar.html">
        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
      </a>
      </li>

      <li>
        <a href="profile.php">
        <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>
    
    </ul>
 </div></div>
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

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

   <div class="row mt-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
        
           <h4 style="text-align: center;"><b>UPDATE NEWS</b></h4>
           
         
          <hr>
          
          <div class="row">
<!--news update akata adala html code-->
            <div class="col-lg-12">
                <div class="p-2">
			              <div class="p-2"></div>
			              <div class="card card-body" style="background-color: rgb(184, 185, 196);">
				
				<div>
					<div class="card-Secondary">
						<div class="card bg-light">
						   	<div class="card-body text-center bg-dark">
                    <div class="p-2">
                      <form action="admin_php/admin_announcement_action.php" method="post">
                          <div class="p-2">              
                              <input type="text" name="tit" class="form-control" id="Write Announcement Title" aria-describedby="Write Announcement Title"  placeholder="Write Announcement Title" required>
											    </div>

                          <div>
                            <textarea type="text" name="annou" class="form-control" id="Write Description" aria-describedby="Write Description"  placeholder="Write Description" required></textarea>
                          </div>
									

								            <div class="p-2">
									           <button type="submit" class="btn btn-success btn-sm" style="width: 80px; float: right;"><b>PUBLISH</b></button>&nbsp;
									           <button type="reset" class="btn btn-warning btn-sm" style="width: 80px; float: right;"><b>CLEAR</b></button>									    
                            </div>
                        
                      </form>	
                    </div>
                  </div>
                </div>
							</div>						
            </div> 
        </div>
            
<!--news update akata adala php code iwarai-->
          </div>
          <hr>
          
          <h4 style="text-align: center;"><b>CUSTOMER FEEDBACE</b></h4>
          <hr>
          <div class="row">
            <!--feedbck  update akata adala php code-->
            
             <div class="p-2">
            <div class="row">
              <div class="col-md-4">
                
                  <table class="table table-bordered bg-light" style="width: 1000px;">
                  </div>
                    <tbody style="background-color: rgb(184, 185, 196);">
                      <tr>
                        <td>
                          <div id="content" class="card p-2">

<!--OFFICER ANNOUNCEMENT VIEWER PHP START -->
        

<div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            
			       <div class="table-responsive">
              <table class="table table-striped">
                      <thead>
                        <tr>
                           <th scope="col">DATE</th>
                           <th scope="col">NAME</th>
                           <th scope="col">EMAIL</th>
                           <th scope="col">Discription</th>
                        </tr>
                      </thead>
                <tbody>
                  <tr>

                    <?php
                         $Result = mysqli_query($db,"select*from customer_feedback");
                         while($row=mysqli_fetch_array($Result)){
                         $p = $row["cusname"];
                         $q = $row["emailid"];
                         $r = $row["description"];
                         $s = $row["date_time"];
                    ?> 

                         <th> <?php echo "$s";?> </th>
                         <td><?php echo "$p";?> </td>
                         <td><?php echo "$q";?> </td>
                         <td><?php echo "$r";?> </td>
     
                  </tr>
                  <?php 
                        }
                  ?> 
                  
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
<!--OFFICER ANNOUNCEMENT VIEWER PHP END -->

                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
            
      <!-- ANNOUNCEMENT VIEWER PHP END -->
            
          </div>
          <hr>
          
          
          
        </div>
      </div>
    </div>
  </div><!--End Row-->

  <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
  
    </div>
    <!-- End container-fluid-->
    
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

  
<!--footer start-->
<?php
include_once("includes/footer.php");
?>
<!--footer end-->

</body>
</html>
