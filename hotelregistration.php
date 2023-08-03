<?php require "connect.php";
  
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
    $hotelname=$_REQUEST['hname'];
    $hpassword = $_REQUEST['pwd'];
    $hotelstars=$_REQUEST['hstar'];
    $address=$_REQUEST['address'];
    $city=$_REQUEST['city'];
    $charges = $_REQUEST['charges'];
    $email = $_REQUEST['email'];
    $pwd = $_REQUEST['pwd'];
    $pincode = $_REQUEST['pin'];

    $image=$_FILES['img']['name'];
      $move1="hotelupload/".$image;
      move_uploaded_file($_FILES['img']['tmp_name'],$move1);
       $move1 = "../hotelupload/" . $image;
      if ($image!="")
      {
          $sql="INSERT INTO hoteltbl(hname, hemail, hpwd, hstar, haddress, hcity, hpin, hphoto, charges) values ('" . $hotelname . "','" . $email . "','" . $hpassword . "','" . $hotelstars . "','" . $address  . "','" . $city . "','" . $pincode . "','" . $move1 . "','" . $charges . "')";
    $res=mysqli_query($conn,$sql);
        
        if ($res)
        {


    ?>
    <script type="text/javascript">alert('Hotel Registration Successful'); window.location = 'hotellogin.php';</script>
    <?php
  }
  else

  {
    ?>
    <script type="text/javascript">alert('Signup Error !!'); window.location.href="hotelregistration.php"</script>

    <?php


  }
  }
}

?> 


<!DOCTYPE html>
<html>
    <head>

 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Go Tours</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
       
<style type="text/css">
    .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
</style>



</head>

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Tour & Travels Website</h2>
        <div class="text-center mb-5 text-dark">Hotel Register Form</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" enctype="multipart/form-data" method="POST">

            <div class="text-center">
              <img src="imgs/user.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Hotel Name" name="hname">
            </div>
		
    		<div class="mb-3">
        		<select name="hstar" class="form-control" id="hotelstar">
        			<option value="0">Select Stars </option>
		
		<option value="7">7</option>
		<option value="5">5</option>
		<option value="3">3</option>
		
</select>      

              </div>
		

		
            <div class="mb-3">
              <textarea class="form-control" id="Address" name="address" rows=10 cols=10></textarea>
            </div>



            <div class="mb-3">
              <input type="text" class="form-control" id="city" aria-describedby="emailHelp"
                placeholder="city" name="city">
            </div>

<div class="mb-3">
              <input type="text" class="form-control" id="charges" aria-describedby="emailHelp"
                placeholder="0.00" name="charges">
            </div>
            
<div class="mb-3">
              <input type="text" class="form-control" id="pin" aria-describedby="emailHelp"
                placeholder="pin code" name="pin">
            </div>
            <div class="mb-3">
              <input type="file" class="form-control" id="file1" aria-describedby="emailHelp"
                 name="img">
            </div>



            <div class="mb-3">
              <input type="text" class="form-control" id="email" aria-describedby="emailHelp"
                placeholder="email" name="email" required>
            </div>


            <div class="mb-3">
              <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                placeholder="password" name="pwd">
            </div>



                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="save">Signup</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Hotel Already Registred? <a href="hotellogin.php" class="text-dark fw-bold"> Login Now !!</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>