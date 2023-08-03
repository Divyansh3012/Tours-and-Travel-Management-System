<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Tours And Travels Managemnt - Change Password</title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard790f.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custome.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    </head>

    <body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-4.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="home.html" class="simple-text">
                        Tours And Travels Management
                    </a>
                </div>
               <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.php">
                            <i class="fa fa-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="changepassword.php">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="viewhotelbookings.php">
                            <i class="fa fa-pencil"></i>
                            <p>View Bookings</p>
                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="logout.php">
                            <i class="fa fa-lock"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo">  Hotel's Dashboard </a>
                    <button href="#" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Hotel<span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                   
                                    <a class="dropdown-item" href="#">Change Password</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                      </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

	           <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> <i class="fa fa-users"></i>  Change Password</h4><hr>
                                </div>
                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Current Password</label>
                                                    <input type="password" class="form-control"  name="cp">
                                                </div>
                                            </div>
                                           </div>
 										
 										<div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">                                           
 
		
												<label>New Password</label>
													<input type="password" class="form-control"  name="np">
                                                </div>
                                            </div>
                                           </div>



		                                  <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">                                           
 
		
												<label>Retype New Password</label>
													<input type="password" class="form-control"  name="rp">
                                                </div>
                                            </div>
                                           </div>





		<input type="submit" name="submit" class="btn btn-success btn-fill pull-left" value="submit"> &nbsp &nbsp
                                       
                                        <input type="reset" name="reset" class="btn btn-danger btn-fill" value="reset">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                        	  ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="">Your Project Name</a>, made with love from Divyang Sodha
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/light-bootstrap-dashboard790f.js?v=2.0.1" type="text/javascript"></script>
<script src="assets/js/demo.js"></script>
</html>