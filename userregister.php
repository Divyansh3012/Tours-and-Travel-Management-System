<?php require "connect.php";
  
  //check button is click or not using this function isset().
  if (isset($_REQUEST['save']))
  {
    $uname=$_REQUEST['uname'];
    $password = $_REQUEST['upwd'];
    $contact=$_REQUEST['contact'];
    $uadd=$_REQUEST['address'];
    $ucity=$_REQUEST['city'];
    $uemail=$_REQUEST['email'];
    // $charges = $_REQUEST['charges'];
    // $email = $_REQUEST['email'];
    // $pwd = $_REQUEST['pwd'];
    // $pincode = $_REQUEST['pin'];

          $sql="INSERT INTO usertbl(uname, uemail, upwd, ucontact, ucity, uadd) values ('$uname', '$uemail' , '$password', '$contact', '$ucity', '$uadd')";

    $res=mysqli_query($conn,$sql);
        
        if ($res)
        {


    ?>
    <script type="text/javascript">alert('User Registration Successful'); window.location = 'loginuser.php';</script>
    <?php
  }
  else

  {
    ?>
    <script type="text/javascript">alert('Signup Error !!'); window.location.href="userregister.php"</script>

    <?php


  
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
        <div class="text-center mb-5 text-dark">User Register Form</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="POST">

            <div class="text-center">
              <img src="imgs/user.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" name="uname">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="contact" placeholder="contact" name="contact">
            </div>

             <div class="mb-3">
              <input type="text" class="form-control" id="email" placeholder="email" name="email">
            </div>

            <div class="mb-3">
              <textarea class="form-control" id="address" rows=10 cols=10 name="address"></textarea>

            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="city" name="city" placeholder="city">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="upwd">
            </div>

            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="save">Signup</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Already Registred? <a href="loginuser.php" class="text-dark fw-bold"> Login Now !!</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>