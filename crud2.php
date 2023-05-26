<?php 
if ((isset ($_POST['b2'])) || (isset($_POST['add2'])) || (isset($_POST['del']))){
	?>
<html>
<link href="css/crud.css" rel="stylesheet">
<link href="css/icon.css" rel="stylesheet">
<body>
<div class="h">
<form action="home.html" method="POST">
<input type="image" class="home" src="https://img.icons8.com/windows/96/000000/home.png">
</form></div>
<div class="b">
<form action="semester.php" method="POST">
<input type="image" name="b" class="back" src="https://img.icons8.com/windows/96/000000/cancel.png">
</form></div>
<center>
<form action="secsem.html" method="POST">
<input type="submit" class="addbtn"  name="add" value="Add Records">
</form>
<table border="1">
<?php
$con=mysqli_connect("localhost","root","","gdb");
$querry="select * from secsem";
$res=mysqli_query($con,$querry);
?>
<tr><th colspan="15"><u>STUDENT'S GRADE</u></th></tr>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Enroll No.</th>
<th>Sem</th>
<th>DS</th>
<th>DM</th>
<th>FAM</th>
<th>COA</th>
<th>EOS</th>
<th>DS_pr</th>
<th>COA_pr</th>
<th>FAM_pr</th>
<th>Total</th>
<th>Action 1</th>
<th>Action 2</th>

</tr>
<?php
while($row=mysqli_fetch_array($res))
{
	?>
	
	<tr align="center">
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['dob'];?></td>
	<td><?php echo $row['enroll'];?></td>
	<td><?php echo $row['sem'];?></td>
	<td><?php echo $row['DS'];?></td>
	<td><?php echo $row['DM'];?></td>
	<td><?php echo $row['FAM'];?></td>
	<td><?php echo $row['COA'];?></td>
	<td><?php echo $row['EOS'];?></td>
	<td><?php echo $row['DS_pr'];?></td>
	<td><?php echo $row['COA_pr'];?></td>
	<td><?php echo $row['FAM_pr'];?></td>
	<td><?php echo $row['total'];?></td>
	
	<td><form method="POST" action="edit2.php">
		<input type="hidden" name="e" value="<?php echo $row['enroll'];?>">
	<input type="submit" class="editbtn" name="edit" value="Edit">
	</form>
	</td>
	<td><form method="POST" action="delete2.php">
		<input type="hidden" name="d" value="<?php echo $row['enroll'];?>">
	<input type="submit" class="delbtn" name="delete" value="Delete">
	</form>
	</td>
	</tr>

	<?php
}
?>
	</table>
</center>

<center>

<table border="1">
<?php
$query="select * from grade2";
$res2=mysqli_query($con,$query);
?>
<tr><th colspan="11"><u>STUDENT'S GRADE</u></th></tr>
<tr>
<th>Name</th>
<th>Enroll No.</th>
<th>DS</th>
<th>DM</th>
<th>FAM</th>
<th>COA</th>
<th>EOS</th>
<th>DS_pr</th>
<th>COA_pr</th>
<th>FAM_pr</th>
<th>Total</th>
</tr>
<?php
while($row2=mysqli_fetch_array($res2))
{
	?>
	
	<tr align="center">
	<td><?php echo $row2['name'];?></td>
	<td><?php echo $row2['enroll'];?></td>
	<td><?php echo $row2['DS'];?></td>
	<td><?php echo $row2['DM'];?></td>
	<td><?php echo $row2['FAM'];?></td>
	<td><?php echo $row2['COA'];?></td>
	<td><?php echo $row2['EOS'];?></td>
	<td><?php echo $row2['DS_pr'];?></td>
	<td><?php echo $row2['COA_pr'];?></td>
	<td><?php echo $row2['FAM_pr'];?></td>
	<td><?php echo $row2['total'];?></td>
	</tr>

	<?php
}
?>
	</table>
</center>
</body>
</html>
<?php
}
else
{
	?>
<script>
	alert("login first");
</script>
	<?php
	header('Location:admin.html');
}

?>