<?php
$enroll=$_POST['e'];
$con=mysqli_connect("localhost","root","","gdb");
$sel_data="select * from firstsem where enroll='$enroll'";
$res=mysqli_query($con,$sel_data);
$row=mysqli_fetch_array($res);
?>
<html>
<link href="css/update.css" rel="stylesheet">
<head>
</head>
<body>
<div id="m">
<center><h1>Edit Details</h1>
<form method="POST" action="update1.php">
<table>
<tr><th>Name:</th><td><input type="text" name="name" value=" <?php echo $row['name']?>" ></td></tr>

<tr><th>Enrollment no.:</th><td><input type="text" name="enroll" maxlength="10" value=" <?php echo $row['enroll']?>" ></td></tr>


<tr><th>C Language:</th><td><input type="text" name="first" value=" <?php echo $row['C']?>" maxlength="3" size="5" required ></td></tr>
<tr><th>Digital Electronics:</th><td><input type="text" name="second" value=" <?php echo $row['DE']?>" maxlength="3" size="5" required ></td></tr>
<tr><th>Business Organisation:</th><td><input type="text" name="third" value=" <?php echo $row['BO']?>" maxlength="3" size="5" required></td></tr>
<tr><th>Elementary Maths:</th><td><input type="text" name="fourth" maxlength="3" value=" <?php echo $row['EM']?>" size="5" required></td></tr>
<tr><th>Communication Skills:</th><td><input type="text" name="fifth" value=" <?php echo $row['CS']?>" maxlength="3" size="5" required></td></tr>
<tr><th>C practical:</th><td><input type="text" name="sixth" value=" <?php echo $row['C_pr']?>" maxlength="3" size="5" required></td></tr>
<tr><th>DE practical:</th><td><input type="text" name="seventh" value=" <?php echo $row['DE_pr']?>" maxlength="3" size="5" required></td></tr>
<tr><th>CS practical:</th><td><input type="text" name="eighth" value=" <?php echo $row['CS_pr']?>" maxlength="3" size="5" required></td></tr>


</table>
<br>
<input type="submit" id="btn" name="update" value="Update"><br>
</form>
</center>
</div>
</html>