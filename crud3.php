<?php 
if ((isset ($_POST['b3'])) || (isset($_POST['add3'])) || (isset($_POST['del']))){
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
<form action="thsem.html" method="POST">
<input type="submit" class="addbtn" name="add" value="Add Records">
</form>
<table border="1">
<?php
$con=mysqli_connect("localhost","root","","gdb");
$querry="select * from thsem";
$res=mysqli_query($con,$querry);
?>
<tr><th colspan="15"><u>STUDENT'S MARKS</u></th></tr>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Enroll No.</th>
<th>Sem</th>
<th>C++</th>
<th>DBMS</th>
<th>DCN</th>
<th>DAA</th>
<th>OS</th>
<th>C++_pr</th>
<th>DBMS_pr</th>
<th>Coll.</th>
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
	<td><?php echo $row['Cpp'];?></td>
	<td><?php echo $row['DBMS'];?></td>
	<td><?php echo $row['DCN'];?></td>
	<td><?php echo $row['DAA'];?></td>
	<td><?php echo $row['OS'];?></td>
	<td><?php echo $row['Cpp_pr'];?></td>
	<td><?php echo $row['DBMS_pr'];?></td>
	<td><?php echo $row['colloquium'];?></td>
	<td><?php echo $row['total'];?></td>
		<td><form method="POST" action="edit3.php">
		<input type="hidden" name="e" value="<?php echo $row['enroll'];?>">
	<input type="submit" class="editbtn" name="edit" value="Edit">
	</form>
	</td>
	<td><form method="POST" action="delete3.php">
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

$query="select * from grade3";
$res2=mysqli_query($con,$query);
?>
<tr><th colspan="11"><u>STUDENT'S GRADE</u></th></tr>
<tr>
<th>Name</th>
<th>Enroll No.</th>
<th>C++</th>
<th>DBMS</th>
<th>DCN</th>
<th>DAA</th>
<th>OS</th>
<th>C++_pr</th>
<th>DBMS_pr</th>
<th>Coll.</th>
<th>Total</th>

</tr>
<?php
while($row2=mysqli_fetch_array($res2))
{
	?>
	
	<tr align="center">
	<td><?php echo $row2['name'];?></td>
	<td><?php echo $row2['enroll'];?></td>
	<td><?php echo $row2['Cpp'];?></td>
	<td><?php echo $row2['DBMS'];?></td>
	<td><?php echo $row2['DCN'];?></td>
	<td><?php echo $row2['DAA'];?></td>
	<td><?php echo $row2['OS'];?></td>
	<td><?php echo $row2['Cpp_pr'];?></td>
	<td><?php echo $row2['DBMS_pr'];?></td>
	<td><?php echo $row2['colloquium'];?></td>
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