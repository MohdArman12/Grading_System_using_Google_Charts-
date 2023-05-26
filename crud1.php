<?php 
if ((isset ($_POST['b1'])) || (isset($_POST['add1'])) || (isset($_POST['del'])) || (isset($_POST['up']))){
	?>
<html>

<link href="css/crud.css" rel="stylesheet">
<link href="css/icon.css" rel="stylesheet">
<body>

<div class="h">
<form action="home.html" method="POST">
<input type="image" class="home" src="https://img.icons8.com/windows/96/000000/home.png">
</form></div>
<div  class="b">
<form action="semester.php" method="POST">
<input type="image"  class="back" src="https://img.icons8.com/windows/96/000000/cancel.png" name="b">
</form></div>
<center>

<form action="firsem.html"  method="POST">
<input type="submit"  class="addbtn" name="add" value="Add Records">
</form>
<div>
<table border="1" cellspacing="15">
<?php
$con=mysqli_connect("localhost","root","","gdb");
$querry="select * from firstsem";
$res=mysqli_query($con,$querry);
?>
<tr><th colspan="15"><u>STUDENT'S MARKS</u></th></tr>
<tr>
<th>Name</th>
<th>DOB</th>
<th>Enroll. No.</th>
<th>Sem</th>
<th>C</th>
<th>DE</th>
<th>BO</th>
<th>EM</th>
<th>CS</th>
<th>C_pr</th>
<th>DE_pr</th>
<th>CS_pr</th>
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
	<td><?php echo $row['C'];?></td>
	<td><?php echo $row['DE'];?></td>
	<td><?php echo $row['BO'];?></td>
	<td><?php echo $row['EM'];?></td>
	<td><?php echo $row['CS'];?></td>
	<td><?php echo $row['C_pr'];?></td>
	<td><?php echo $row['DE_pr'];?></td>
	<td><?php echo $row['CS_pr'];?></td>
	<td><?php echo $row['total'];?></td>
	<td><form method="POST" action="edit1.php">
		<input type="hidden" name="e" value="<?php echo $row['enroll'];?>">
	<input type="submit" class="editbtn" name="edit" value="Edit">
	</form>
	</td>
	<td><form method="POST" action="delete1.php">
		<input type="hidden" name="d" value="<?php echo $row['enroll'];?>">
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

<center>


<div>
<table border="1" cellspacing="15">
<?php

$query="select * from grade1";
$res2=mysqli_query($con,$query);
?>
<tr><th colspan="11"><u>STUDENT'S GRADES</u></th></tr>
<tr>
<th>Name</th>
<th>Enroll. No.</th>
<th>C</th>
<th>DE</th>
<th>BO</th>
<th>EM</th>
<th>CS</th>
<th>C_pr</th>
<th>DE_pr</th>
<th>CS_pr</th>
<th>Total</th>
</tr>
<?php
while($row2=mysqli_fetch_array($res2))
{
	?>
	
	<tr align="center">
	<td><?php echo $row2['name'];?></td>
	<td><?php echo $row2['enroll'];?></td>
	<td><?php echo $row2['C'];?></td>
	<td><?php echo $row2['DE'];?></td>
	<td><?php echo $row2['BO'];?></td>
	<td><?php echo $row2['EM'];?></td>
	<td><?php echo $row2['CS'];?></td>
	<td><?php echo $row2['C_pr'];?></td>
	<td><?php echo $row2['DE_pr'];?></td>
	<td><?php echo $row2['CS_pr'];?></td>
	<td><?php echo $row2['total'];?></td>
	</tr>

	<?php
}
?>
	</table>
	</div>
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