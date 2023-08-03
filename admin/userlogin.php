<?php
include 'connect.php';
 // include 'header.php';
 //  include 'menu.php';

	if (isset($_REQUEST['LOGIN']))
	{
		$Username  = $_REQUEST['uname'];
		$pass = $_REQUEST['password'];
		
		$sql   = "SELECT * FROM user_reg WHERE email='".$Username."' and password='".$pass."'"; 
		$res   = mysqli_query($conn,$sql); 
		if (mysqli_num_rows($res) == 1) 
		{
		  $row = mysqli_fetch_array($res, MYSQLI_BOTH);
		  $_SESSION['uid']        = $row['uid'];
		  //$_SESSION['firstname'] = $row['name'];
		?>

		  <script type="text/javascript">window.location.href="user/userhome.php"</script>
		  
		<?php }
		 else { ?>
				<br><br><br>
		- 
<br><br><br>
<div class="container"  >
	<div class="row">
		<h1><center	<div class="about-3">
	        	</div>
	        <script type="text/javascript">
	                setTimeout(function () {            
	               window.location.href='userlogin.php'; // the redirect goes here
	            },2000);    
	        </script>   
			</div>
		<?php }
	}
?>	
<!->Login Now</center></h1><hr>
		<div class="col-sm-3 col-lg-3 col-md-3"></div>
		<div class="col-sm-6 col-lg-6 col-md-6">
			<form method="POST"> 

<a href="userregister.php" class="btn btn-primary btn-lg pull-right">New User! </a></br></br>
Email:</br>
<input type="email" name="uname" class="form-control"  placeholder="Email" required/>
</br>
Password:</br>
<input type="password" name="password" class="form-control"  placeholder="Password" required/>
</br>
<input type="submit" class="btn btn-success" value="Login" name="LOGIN"> </input>
<input type="reset" class="btn btn-danger" value="Cancel" name="CANCEL"> </input>
</br></br>

<a href="forgetpassword.php" style="color: yellow"> Forgot password? </a></br></br>

</form>
		</div>
		<div class="col-sm-3 col-lg-3 col-md-3"></div>
	</div>
</div>

<?php require 'footer.php'; ?> -->