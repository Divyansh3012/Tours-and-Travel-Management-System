<?php
	require "connect.php";
	
	   if(!isset($_SESSION['adlogin']))
	   {
	        session_start();
	    }
	    
	     
	$sql="select * FROM hoteltbl";
	$result= mysqli_query($conn,$sql);

	if (isset($_REQUEST['hid_remove'])) 
	    {
	        $delete_sql="DELETE FROM hoteltbl WHERE hid='".$_REQUEST['hid_remove']."'";
	        $del_result=mysqli_query($conn,$delete_sql);

	?>

	<script type="text/javascript">window.location.href="manageHotel.php"</script>

	<?php
	    }

?>

<html>
<head>
	<title>  Tours and Travel Management System </title>
    <!-- Fonts and icons     -->
    <!-- <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->

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
	<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-4.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="home.html" class="simple-text">
                        Tours and Travel Management System 
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.html">
                            <i class="fa fa-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="manageuser.php">
                            <i class="fa fa-users"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="managefeedback.php">
                            <i class="fa fa-bell"></i>
                            <p>Manage Feedback</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="manageBus.php">
                            <i class="fa fa-bus" aria-hidden="true"></i>
                            <p>Manage Bus</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="manageHotel.php">
                            <i class="fa fa-building" aria-hidden="true"></i>
                            <p>Manage Hotel</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="manageTrains.php">
                            <i class="fa fa-subway" aria-hidden="true"></i>
                            <p>Manage Trains</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="profile.php">
                            <i class="fa fa-user"></i>
                            <p>Profiles</p>
                        </a>
                    </li>   
                    <li>
                        <a class="nav-link" href="">
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
                                    <span class="no-icon">Admin</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Update Profile</a>
                                    <a class="dropdown-item" href="#">Update Password</a>
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
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title"> <i class="fa fa-users"></i>  Manage Hotels</h4><hr>
                                </div>
                                <br>

                                <div class="card-body table-full-width table-responsive">
                                    <a href="hotel_create.html" class="btn btn-success btn-sm btn-fill" style="margin-left: 5px;">Create Hotel</a>
                                    <br><br>
                                    <table class="table table-hover table-striped">

		<thead>
			<tr>
				<th>Hotel ID</th>     <!-- <th> mean table header -->
				<th>Hotel Name</th>
				<th>Hotel Star</th>
				<th>Hotel Address</th>
				<th>City </th>
				<th>Pin</th>
				<th>Hotel Photo</th>
				<th>Delete</th>

			</tr>
		</thead>
	
<tbody>
	<?php while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
		<tr>

<td>
	<?php echo $row['hid']; ?>
</td>
<td>
	<?php echo $row['hname'];?>	
</td>
<td>
	<?php echo $row['hstar'];?>	
</td>
<td>
jm	<?php echo $row['haddress'];?>	
</td>
<td>
	<?php echo $row['hcity'];?>
</td>
<td>
	<?php echo $row['hpin'];?>
</td>
<td>
	<?php echo $row['hphoto'];?>	
</td>
<td>
	<a href ="manageHotel.php?hid_remove=<?php echo $row["hid"]?>"class="btn btn-danger btn-sm btn-fill">delete</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table></div>
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
                            <a href="">Tours and Travel MAnagement System</a>, made by Divyansh, Nishil, Joel, Dev              </p>
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

	