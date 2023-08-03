<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
require "connect.php";
$sql="select * FROM bookingtbl";
$result= mysqli_query($conn,$sql);

if (isset($_REQUEST['uid_remove'])) 
    {
        $delete_sql="DELETE FROM bookingtbl WHERE Uid='".$_REQUEST['uid_remove']."'";
        $del_result=mysqli_query($conn,$delete_sql);

?>

<script type="text/javascript">window.location.href="manageuser.php"</script>

<?php
    }

?>

<html>
<head>

</head>
<body>
	<table border=3>
		<thead>
			<tr>
				<th>Booking Id</th>
				<th>Booking Date</th>
				<th>User Id </th>
				<th>Ticket Type</th>
				<th>Amount</th>
				<th>Booking Status</th>
			</tr>
		</thead>
	
<body>
	<?php while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
		<tr>

<td>
	<?php echo $row['Bid'];?>	
</td>
<td>
	<?php echo $row['Bdate'];?>	
</td>
<td>
	<?php echo $row['uid'];?>	
</td>
<td>
	<?php echo $row['Tickettype'];  ?>
</td>
<td>
	<?php echo $row['TotalAmount'];?>	
</td>

<td>
	<?php echo $row['Bstatus'];?>
</td>
<td>
	<a href ="manageuser.php?uid_remove=<?php echo $row['Pid']?>"class="btn btn-danger">delete</a>
</td>
</tr>
<?php
}
?></head>
<body>

</body>
</html>