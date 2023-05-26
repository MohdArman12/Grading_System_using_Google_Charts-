<?php
$enroll=$_POST['e'];
$con=mysqli_connect("localhost","root","","gdb");
$sel_data="select * from fosem where enroll='$enroll'";
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
<form action="update4.php" method="POST">
<table>
<tr><th>Name:</th><td><input type="text" name="name" value=" <?php echo $row['name']?>" ></td></tr>
<tr><th>DOB:</th><td><input type="date" name="dob" value=" <?php echo $row['dob']?>" ></td></tr>
<tr><th>Enrollment no.:</th><td><input type="text" name="enroll" maxlength="10" value=" <?php echo $row['enroll']?>" ></td></tr>
<tr><th>Semester:</th><td><input type="text" name="sem" value=" <?php echo $row['sem']?>" size="1" ></td></tr>
<tr><th>Java:</th><td><input type="text" name="first" value=" <?php echo $row['java']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>Unix:</th><td><input type="text" name="second" value=" <?php echo $row['unix']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>SAD:</th><td><input type="text" name="third" value=" <?php echo $row['SAD']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>CBNST:</th><td><input type="text" name="fourth" value=" <?php echo $row['CBNST']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>Graph Theory:</th><td><input type="text" name="fifth" value=" <?php echo $row['GT']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>Java practical:</th><td><input type="text" name="sixth" value=" <?php echo $row['java_pr']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>Unix practical:</th><td><input type="text" name="seventh" value=" <?php echo $row['unix_pr']?>"  maxlength="3" size="5" required></td></tr>
<tr><th>Mini Project:</th><td><input type="text" name="eighth" value=" <?php echo $row['mini']?>"  maxlength="3" size="5" required></td></tr>
</table>
<br>
<input type="Submit" id="btn" name="update"  value="Update"><br>
</form>
</center>
</div>
</body>
</html>