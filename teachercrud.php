<html>
<head>
<link href="css/crud.css" rel="stylesheet">
</head>
<body>
<center>
<form action="addteacher.html"  method="POST">
<input type="submit"  class="addbtn" name="add" value="Add Teacher">
</form>
<div>
<table border="1" cellspacing="15">
<?php
$con=mysqli_connect("localhost","root","","gdb");
$querry="select * from teacher";
$res=mysqli_query($con,$querry);
?>
<tr><th colspan="15"><u>Manage Teachers</u></th></tr>
<tr>
<th>Name</th>
<th>Password</th>
<th>Action</th>

</tr>
<?php
while($row=mysqli_fetch_array($res))
{
	?>
	
	<tr align="center">
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['password'];?></td>
	
	
	<td><form method="POST" action="deleteteacher.php">
		<input type="hidden" name="d" value="<?php echo $row['name'];?>">
	<input type="submit" name="delete" class="delbtn" value="Delete">
	</form>
	</td>
	</tr>

	<?php
}
?>
	</table>
	</div>
</center>

</body>
</html>