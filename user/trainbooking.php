<?php
require "connect.php";

if (isset($_REQUEST['update'])) {
    $trainid = $_POST["trainid"];
    $source = $_POST["trainfrom"];
    $desti = $_POST["trainto"];
    $bookingdate = $_POST["bookingdate"];

    $adultfare = $_POST["adultfare"];
    $childfare=$_POST["childfare"];
    $adults = $_POST['adult'];
    $childs = $_POST['child'];
    $totalfare = ($adultfare  * $adults) + ($childfare * $childs);
    $bookingno = rand();
      // Generating a random number in a
      // Specified range.
$bookingno = rand(999,30000);
$_SESSION['bookingno'] = $bookingno;
$_SESSION["totalfare"] = $totalfare;
$_SESSION["trainid"] = $trainid;
$_SESSION["source"] = $source;
$_SESSION["desti"] = $desti;
$_SESSION["adults"] = $adults;
$_SESSION["childs"] = $childs;
$_SESSION["bdate"] = $bookingdate;

header('location:trainbookingconfirmation.php');

}


if (isset($_REQUEST['tid']))
{
        $tid1 = $_REQUEST["tid"];
            $sql = "select * FROM traindtls where Tid ='". $tid1."'";
            $result = mysqli_query($conn,$sql);
     

}
  ?>
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
                                    <h4 class="card-title"> <i class="fa fa-train"></i>&nbsp &nbsp Train Booking</h4><hr>
                                </div>
                                <div class="card-body">
                                <form method="POST">

                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
           <?php while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>

        <label>Train id : <?php echo $row['Tid']; ?>
            <input type="hidden" name="trainid" value="<?php echo $row['Tid']; ?>" /></label>

                                                </div>
                                            </div>
                                           

    
  
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
          
          <label>Source:
<?php echo $row['Tfrom']; ?>
            <input type="hidden" name="trainfrom" value="<?php echo $row['Tfrom']; ?>" />

        </label>
                                                </div>
                                            </div>
                                              </div>

     <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">

                                                    <label>Journey Date</label>
        
        <input type="date" name="bookingdate" min="<?php echo date('Y-m-d'); ?>" required>
    </div></div>
     <div class="col-md-6 pr-1">
                                                <div class="form-group">

        <label>Detination:
<?php echo $row['Tto']; ?>
            <input type="hidden" name="trainto" value="<?php echo $row['Tto']; ?>" />

        </label> 
        </div>
        </div>
        </div>

         <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">


    
            <label>Adult</label>
        <select name="adult">
           <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        </div>
    </div>

    <div class="col-md-6 pr-1">
                                                <div class="form-group">


        <label for="child">Children</label>
        <select name="child">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
    </select>
</div>
</div>
</div>


 <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">


        <label>Adult Fair : <?php echo $row['Acharges']; ?>
        </label>
<input type="hidden" name="adultfare" value="<?php echo $row['Acharges']; ?>" />
</div>
</div>

                 <div class="col-md-6 pr-1">
                                                <div class="form-group">


        
        <label>Child Fair : <?php echo $row['Ccharges']; ?>
    </label>
    <input type="hidden" name="childfare" value="<?php echo $row['Ccharges']; } ?>" />
            

    </div>
    </div>
    </div>


 <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">


    <input type="submit" name="update" class="btn btn-success btn-fill pull-left" value="Proceed">
</div>
</div>
<div class="col-md-6 pr-1">
                                                <div class="form-group">

<input type="reset" name="reset" class="btn btn-danger btn-fill" value="Reset">
</div>
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