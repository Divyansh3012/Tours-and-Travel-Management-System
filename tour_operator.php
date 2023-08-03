
<?php
include 'connect.php';
 // include 'header.php';
 //  include 'menu.php';

  if (isset($_REQUEST['save']))                      // HERE 'submit' IS "name" attribute of input tag Submit
  {
    $Username  = $_REQUEST['email'];         // HERE 'Email' is "name" attribute of input tag Email
    $pass = $_REQUEST['pwd'];           // // HERE 'Password' is "name" attribute of input tag Password
    
    $sql   = "SELECT * FROM tourtbl WHERE temail='".$Username."' and tpwd ='".$pass."'"; 
    $res   = mysqli_query($conn,$sql); 
    if (mysqli_num_rows($res) == 1) 
    {
      $row = mysqli_fetch_array($res, MYSQLI_BOTH);
      $_SESSION['tid']        = $row['toperatorid'];
      //$_SESSION['firstname'] = $row['name'];
    ?>

      <script type="text/javascript">window.location.href="tour/dashboard.php"</script>
      
      
    <?php }
     else { ?>
        <br><br><br>
    - 
<br><br><br>
    <?php }
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
        <div class="text-center mb-5 text-dark">Tour Operator Login Form</div>
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5" method="POST">

            <div class="text-center">
              <img src="imgs/user.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
 </div>

            <div class="mb-3">
              <input type="email" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="Email" name="email" required>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                placeholder="password" name="pwd" required>
            </div>


            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="save">Signup</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not Registred? <a href="tourregistration.php" class="text-dark fw-bold"> Signup Now !!</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</body>
</html>