<?php 
if ((isset ($_POST['b4'])) || (isset($_POST['add4'])) || (isset($_POST['del']))){
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
<form action="fosem.html" method="POST">
<input type="submit" class="addbtn" name="add" value="Add Records">
</form>
<table border="1">
<?php
$con=mysqli_connect("localhost","root","","gdb");
$querry="select * from fosem";
$res=mysqli_query($con,$querry);
?>
<tr><th colspan="15"><u>STUDENT'S MARKS</u></th></tr>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Enroll No.</th>
<th>Sem</th>
<th>Java</th>
<th>Unix</th>
<th>SAD</th>
<th>CBNST</th>
<th>GT</th>
<th>Java_pr</th>
<th>Unix_pr</th>
<th>Mini Project</th>
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
	<td><?php echo $row['java'];?></td>
	<td><?php echo $row['unix'];?></td>
	<td><?php echo $row['SAD'];?></td>
	<td><?php echo $row['CBNST'];?></td>
	<td><?php echo $row['GT'];?></td>
	<td><?php echo $row['java_pr'];?></td>
	<td><?php echo $row['unix_pr'];?></td>
	<td><?php echo $row['mini'];?></td>
	<td><?php echo $row['total'];?></td>
		<td><form method="POST" action="edit4.php">
		<input type="hidden" name="e" value="<?php echo $row['enroll'];?>">
	<input type="submit" class="editbtn" name="edit" value="Edit">
	</form>
	</td>
	<td><form method="POST" action="delete4.php">
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

$query="select * from grade4";
$res2=mysqli_query($con,$query);
?>
<tr><th colspan="11"><u>STUDENT'S GRADE</u></th></tr>
<tr>
<th>Name</th>
<th>Enroll No.</th>
<th>Java</th>
<th>Unix</th>
<th>SAD</th>
<th>CBNST</th>
<th>GT</th>
<th>Java_pr</th>
<th>Unix_pr</th>
<th>Mini Project</th>
<th>Total</th>
</tr>
<?php
while($row2=mysqli_fetch_array($res2))
{
	?>
	
	<tr align="center">
	<td><?php echo $row2['name'];?></td>
	<td><?php echo $row2['enroll'];?></td>
	<td><?php echo $row2['java'];?></td>
	<td><?php echo $row2['unix'];?></td>
	<td><?php echo $row2['SAD'];?></td>
	<td><?php echo $row2['CBNST'];?></td>
	<td><?php echo $row2['GT'];?></td>
	<td><?php echo $row2['java_pr'];?></td>
	<td><?php echo $row2['unix_pr'];?></td>
	<td><?php echo $row2['mini'];?></td>
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