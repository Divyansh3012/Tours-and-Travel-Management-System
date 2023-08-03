<?php
include 'connect.php';


	if (isset($_REQUEST['save']))
	{
		$email1    = $_REQUEST['email'];
		$sql   = "SELECT * from usertbl where uemail ='".$email1."' ";
        $res1  = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res1);

$reset_pwd = rand(1000,9999);
        if($count == 1) {

		$sql2   = "UPDATE usertbl set upwd = '" . $reset_pwd . "' where uemail ='".$email1."'";
        $res2  = mysqli_query($conn,$sql2);
$pass = $reset_pwd;
//echo $pass;

require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'projectambekar@gmail.com';       
          // SMTP username
$mail->Password = 'P@55w0rd@123';
// SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'projectambekar@gmail.com';
$mail->FromName = 'Parking Hiring App';
$mail->addAddress($email1, $email1);   
  // Add a recipient
$mail->addAddress($email1); 
              // Name is optional
$mail->addReplyTo($email1);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'your password recovery email';
$mail->Body    = 'Your password is <b>' . $reset_pwd . '</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
  



        	?>
            
<div class="about-3">
        		<div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Your password has been sent on registered email.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='Index.php'; // the redirect goes here
                },5000);    
            </script>   
            </div>

<?php
      }
        } else { ?>
        	 <br><br><br>
        <div class="about-3">
        		<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Mail is not Present..!Not found your email in our database.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='ForgetPassword.php'; // the redirect goes here
                },5000);    
            </script>  
             
            </div>
<?php   }
    
  }
  ?>
  
<br><br><br>
<div class="container"  >
  <div class="row">
    <h1><center>Forgot Password</center></h1><hr>
    <div class="col-sm-4 col-lg-4 col-md-4"></div>
    <div class="col-sm-4 col-lg-4 col-md-4">
<form method="POST">
Email ID:<br>
<input type="text" class="form-control" name="email" placeholder="Email" required />
</br>
<input type="submit" class="btn btn-success" value="Recover" name="save"></input>
<input type="reset" class="btn btn-danger" value="Reset" name="Reset"></input>

</form>
    </div>
    <div class="col-sm-3 col-lg-3 col-md-3"></div>
  </div>
</div><br><br>



