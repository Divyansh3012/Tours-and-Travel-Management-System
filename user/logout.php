<?php
$_SESSION['uid'] = "";
unset($_SERVER['hid']);
header('location:../index.html');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logout Page</title>
</head>
<body>
<p> You have been Logged out successfully</p>
</body>
</html>