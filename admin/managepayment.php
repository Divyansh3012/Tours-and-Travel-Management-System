<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment Page</title>
</head>
<body>
	<?php
require "connect.php";
$sql="select * FROM payment";
$result= mysqli_query($conn,$sql);

if (isset($_REQUEST['uid_remove'])) 
    {
        $delete_sql="DELETE FROM user_tbl WHERE uid='".$_REQUEST['uid_remove']."'";
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
				<th>Payment Id</th>
				<th>Payment Date</th>
				
				<th>User Id </th>
				<th>Amount</th>
				<th>Payment Status</th>
				



			</tr>
		</thead>
	
<body>
	<?php while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) { ?>
		<tr>

<td>
	<?php echo $row['Pid'];?>	
</td>
<td>
	<?php echo $row['Pdate'];?>	
</td>
<td>
	<?php echo $row['Uid'];?>	
</td>

<td>
	<?php echo $row['Amount'];?>	
</td>

<td>
	<?php echo $row['Pstatus'];?>
</td>
<td>
	<a href ="manageuser.php?uid_remove=<?php echo $row['Pid']?>"class="btn btn-danger">delete</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>
	

