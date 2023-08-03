<?php
require "connect.php";
if (isset($_REQUEST['update'])) {
    $tourid = $_POST["tourid"];
    $bookingdate = date(Y-m-d);
    $totalfare = $_POST['tcharges'];
    $bookingno = rand();
      // Generating a random number in a
      // Specified range.
$bookingno = rand(999,30000);
$_SESSION['bookingno'] = $bookingno;
$_SESSION["totalfare"] = $totalfare;
$_SESSION["tourid"] = $tourid;
$_SESSION["bdate"] = $bookingdate;

header('location:tourbookingconfirmation.php');

}


if (isset($_REQUEST['tid']))
{
        $tid1 = $_REQUEST["tid"];
            $sql = "select * FROM tourtbl where tid ='". $tid1."'";
            $result = mysqli_query($conn,$sql);
     

}
  ?>


            <!-- End Navbar -->
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Tours And Travels Managemnt - Train Booking</title>
         <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
       

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Train Booking</title>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
       

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    
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
                    <a href="dashboard.php" class="simple-text">
                        Tours and Travel Management System 
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
                        <a class="nav-link" href="viewtours.php">
                            <i class="fa fa-users"></i>
                            <p>Tour Booking</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="viewhotels.php">
                            <i class="fa fa-building"></i>
                            <p>Hotel Booking</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="viewtrains.php">
                            <i class="fa fa-train" aria-hidden="true"></i>
                            <p>Train Booking</p>
                        </a>
                    </li>

                     <li>
                        <a class="nav-link" href="viewbuses.php">
                            <i class="fa fa-bus" aria-hidden="true"></i>
                            <p>Bus Booking</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="mybooking.php">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <p>My Bookings</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="payment.php">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <p>My Payments</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="feedback.php">
                            <i class="fa fa-book" ></i>
                            <p>Feedback</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="profile.php">
                            <i class="fa fa-picture-o"></i>
                            <p>Profile</p>
                        </a>
                    </li>  
                    <li>
                        <a class="nav-link" href="Changepassword.php">
                            <i class="fa fa-lock"></i>
                            <p>Change Password</p>
                        </a>
                    </li>    
                    <li>
                        <a class="nav-link" href="logout.php">
                            <i class="fa fa-sign-out"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="#" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">User</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="profile.php">Update Profile</a>
                                    <a class="dropdown-item" href="changepassword.php">Update Password</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
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
                                    <h4 class="card-title"> <i class="fa fa-train"></i>&nbsp &nbsp Tour Booking</h4><hr>
                                </div>
                                <div class="card-body">
                                <form method="POST">

                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
           <?php while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>

        <label>Tour id : <?php echo $row['tid']; ?>
            <input type="hidden" name="tourid" value="<?php echo $row['tid']; ?>" /></label>

                                                </div>
                                            </div>
                            </div>


                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
           
        <label>Days : <?php echo $row['tdays']; ?>
            <input type="hidden" name="tdays" value="<?php echo $row['tdays']; ?>" /></label>

                                                </div>
                                            </div>
                             <div class="col-md-6 pr-1">
                                                <div class="form-group">
           
        <label>Nights : <?php echo $row['tnight']; ?>
            <input type="hidden" name="tnights" value="<?php echo $row['tnight']; ?>" /></label>

                                                </div>
                                            </div>


	</div>

                                        <div class="row">
                                            
     <div class="col-md-6 pr-1">
                                                <div class="form-group">
           
        <label>Charges : <?php echo $row['tcharges']; ?>
            <input type="hidden" name="tcharges" value="<?php echo $row['tcharges']; ?>" /></label>

                                                </div>
                                            </div>
                                        </div>

	
                                        <div class="row">
                                            
 <div class="col-md-6 pr-1">
                                                <div class="form-group">
           
        <label>Details : <br/>
            <?php echo $row['tdetails']; ?>
            <input type="hidden" name="tdetails" value="<?php echo $row['tdetails']; }?>" /></label>

                                                </div>
                                            </div>
</div>

 <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">


    <input type="Submit" name="update" value="submit" class="btn btn-success btn-fill pull-left">
</div>
</div>
<div class="col-md-6 pr-1">
                                                <div class="form-group">
	<input type="Reset" name="reset" value="reset" class="btn btn-danger btn-fill">
</div></div>
</div>
</div>
</form>
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
                            <a href="">Tours and Travel Management System</a>
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