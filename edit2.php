<?php
$enroll=$_POST['e'];
$con=mysqli_connect("localhost","root","","gdb");
$sel_data="select * from secsem where enroll='$enroll'";
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
<form action="update2.php" method="POST">
<table>
<tr><th>Name:</th><td><input type="text" name="name" value=" <?php echo $row['name']?>" ></td></tr>
<tr><th>DOB:</th><td><input type="date" name="dob" value=" <?php echo $row['dob']?>" ></td></tr>
<tr><th>Enrollment no.:</th><td><input type="text" name="enroll" maxlength="10" value=" <?php echo $row['enroll']?>" ></td></tr>
<tr><th>Semester:</th><td><input type="text" name="sem" value=" <?php echo $row['sem']?>" size="1" ></td></tr>
<tr><th>Data Structure:</th><td><input type="text" name="first"  value=" <?php echo $row['DS']?>" maxlength="3" size="5" required></td></tr>
<tr><th>Discrete Maths:</th><td><input type="text" name="second"  value=" <?php echo $row['DM']?>" maxlength="3" size="5" required></td></tr>
<tr><th>FAM:</th><td><input type="text" name="third" maxlength="3"  value=" <?php echo $row['FAM']?>" size="5" required></td></tr>
<tr><th>COA:</th><td><input type="text" name="fourth"  value=" <?php echo $row['COA']?>" maxlength="3" size="5" required></td></tr>
<tr><th>EOS:</th><td><input type="text" name="fifth"  value=" <?php echo $row['EOS']?>" maxlength="3" size="5" required></td></tr>
<tr><th>DS practical:</th><td><input type="text" name="sixth"  value=" <?php echo $row['DS_pr']?>" maxlength="3" size="5" required></td></tr>
<tr><th>COA practical:</th><td><input type="text" name="seventh"  value=" <?php echo $row['COA_pr']?>" maxlength="3" size="5" required></td></tr>
<tr><th>FAM practical:</th><td><input type="text" name="eighth"  value=" <?php echo $row['FAM_pr']?>" maxlength="3" size="5" required></td></tr>
</table>
<br>
<input type="Submit" id="btn" name="update"  value="Update"><br>
</form>
</center>
</div>
</body>
</html>