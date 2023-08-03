<?php
include 'connect.php';


	if (isset($_REQUEST['save']))
	{
		$email1    = $_REQUEST['Email'];
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
$mail->Password = '45432';
// SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'projectambekar@gmail.com';
$mail->FromName = 'Tours  Travels Project';
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
                   window.location.href='loginuser.php'; // the redirect goes here
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
                   window.location.href='forgetpassword.php'; // the redirect goes here
                },5000);    
            </script>  
             
            </div>
<?php   }
    
  }
  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
</head>
<body>
<form>
	<div>
		<h2>Enter Email</h2>
		<input type="text" name="Email" required>
	</div>
	<div>
		<h2>User Type</h2>
		<input type="radio" name="Gender" required>User   
		<input type="radio" name="Gender" required>Admin
	</div>
	<div>
		<input type="Submit" name="save">
		<input type="Reset" name="reset">
	</div>
</form>
</body>
</html>