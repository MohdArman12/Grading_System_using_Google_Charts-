<?php
$enroll=$_POST['e'];
$con=mysqli_connect("localhost","root","","gdb");
$sel_data="select * from thsem where enroll='$enroll'";
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
<form action="update3.php" method="POST">
<table>
<tr><th>Name:</th><td><input type="text" name="name" value=" <?php echo $row['name']?>" ></td></tr>
<tr><th>DOB:</th><td><input type="date" name="dob" value=" <?php echo $row['dob']?>" ></td></tr>
<tr><th>Enrollment no.:</th><td><input type="text" name="enroll" maxlength="10" value=" <?php echo $row['enroll']?>" ></td></tr>
<tr><th>Semester:</th><td><input type="text" name="sem" value=" <?php echo $row['sem']?>" size="1" ></td></tr>
<tr><th>C++:</th><td><input type="text" name="first" value=" <?php echo $row['Cpp']?>" maxlength="3" size="5" required></td></tr>
<tr><th>DBMS:</th><td><input type="text" name="second" value=" <?php echo $row['DBMS']?>" maxlength="3" size="5" required></td></tr>
<tr><th>DCN:</th><td><input type="text" name="third" value=" <?php echo $row['DCN']?>" maxlength="3" size="5" required></td></tr>
<tr><th>DAA:</th><td><input type="text" name="fourth" value=" <?php echo $row['DAA']?>" maxlength="3" size="5" required></td></tr>
<tr><th>Operating System:</th><td><input type="text" value=" <?php echo $row['OS']?>" name="fifth" maxlength="3" size="5" required></td></tr>
<tr><th>C++ practical:</th><td><input type="text" value=" <?php echo $row['Cpp_pr']?>" name="sixth" maxlength="3" size="5" required></td></tr>
<tr><th>DBMS practical:</th><td><input type="text" value=" <?php echo $row['DBMS_pr']?>" name="seventh" maxlength="3" size="5" required></td></tr>
<tr><th>Qolloquium:</th><td><input type="text" value=" <?php echo $row['colloquium']?>" name="eighth" maxlength="3" size="5" required></td></tr>
</table>
<br>
<input type="Submit" id="btn" name="update"  value="Update"><br>
</form>
</center>
</div>
</body>
</html> 