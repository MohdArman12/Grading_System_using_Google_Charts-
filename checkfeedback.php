<?php
if ((isset($_POST['feedback'])) || (isset($_POST['success'])) || (isset($_POST['s2']))){
	?>
<html>
<style>
#d{
	height:48px;
	width:100%;
	background:#fff;
	border:none;
}
#d:hover{
	background:linear-gradient(120deg,#ff0000,#ff3232);
	border:4px;
	opacity:1;
	transition:1s;
}
#r{
		height:48px;
	width:100%;
	background:#fff;
	border:none;
}
#r:hover{
	background:linear-gradient(120deg,#7CFC00,#00FF7F,	#98FB98);
	border:4px;
	opacity:1;
	transition:1s;
}
h1{
	color:#fff;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/crud.css" rel="stylesheet">
<link href="css/icon.css" rel="stylesheet">
<body>
<center>
<div>
<br><h1 id="f" align="center"><u>Feedbacks</u></h1><br>
<table border="1" cellspacing="20">
<?php
$con=mysqli_connect("localhost","root","","gdb");
$querry="select * from feedback";
$res=mysqli_query($con,$querry);
?>
<tr>
<th>Name</th>
<th>E-mail</th>
<th>Contact No.</th>
<th>Student Type</th>
<th>Feedback Type</th>
<th>Description</th>
<th>Response</th>
<th>Response By</th>
<th>Reply</th>
<th>Delete</th>

</tr>
<?php
while($row=mysqli_fetch_array($res))
{
	?>
	
	<tr align="center">
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['email'];?></td>
	<td><?php echo $row['contact'];?></td>
	<td><?php echo $row['s_type'];?></td>
	<td><?php echo $row['f_type'];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['response'];?></td>
	<td><?php echo $row['response_by'];?></td>
	
	<td>
	<form action="replyfeedback.php" method="POST">
		<input type="hidden" name="d" value="<?php echo $row['name'];?>">
	<button type="submit"  id="r" formaction="replyfeedback.php"><i class="fa fa-reply" aria-hidden="true" style="font-size:30px;"></i></button>
	</form>
	<td>
	<form action="deletefeedback.php" method="POST">
		<input type="hidden" name="d" value="<?php echo $row['name'];?>">
	<button type="submit"  id="d" formaction="deletefeedback.php"><i class="fa fa-trash" style="font-size:42px;"></i></button>
	</form>
	</td>
	
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
else{
	?>
	<script>
	alert("Login Required !!");
	window.location='admin.html';
	</script>
	
	<?php
}
?>