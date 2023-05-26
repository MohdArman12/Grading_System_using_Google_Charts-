
<?php
$enroll=$_POST['e'];
$con=mysqli_connect("localhost","root","","gdb");
$sel_data="select * from sixsem where enroll='$enroll'";
$res=mysqli_query($con,$sel_data);
$row=mysqli_fetch_array($res);
?>


<html>
<link href="css/update6sem.css" rel="stylesheet">
<head>
</head>
<body>
<div id="m">
<center><h1>Edit Details</h1>
<form action="update6.php" method="POST">
<table>
<tr><th>Name:</th><td><input type="text" name="name" value=" <?php echo $row['name']?>" ></td></tr>
<tr><th>Enrollment no.:</th><td><input type="text" name="enroll" maxlength="10" value=" <?php echo $row['enroll']?>" ></td></tr>
<tr><th>E-Commerce:</th><td><input type="text" name="first" value=" <?php echo $row['Ecom']?>" maxlength="3" size="5" required></td></tr>
<tr><th>DMW:</th><td><input type="text" name="second" value=" <?php echo $row['DMW']?>"maxlength="3" size="5" required></td></tr>
<tr><th>Secure Computing:</th><td><input type="text" name="third" value=" <?php echo $row['SC']?>" maxlength="3" size="5" required></td></tr>

<tr><th>Major Project:</th><td><input type="text" name="fourth" value=" <?php echo $row['major']?>" maxlength="3" size="5" required></td></tr>
</table><br>
<input type="Submit" name="update" id="btn" value="Update"><br>
</form>
</center>
</div>
</body>
</html>