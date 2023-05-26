<?php
$enroll=$_POST['e'];
$con=mysqli_connect("localhost","root","","gdb");
$sel_data="select * from fifsem where enroll='$enroll'";
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
<form action="update5.php" method="POST">
<table>
<tr><th>Name:</th><td><input type="text" name="name" value=" <?php echo $row['name']?>" ></td></tr>
<tr><th>DOB:</th><td><input type="date" name="dob" value=" <?php echo $row['dob']?>" ></td></tr>
<tr><th>Enrollment no.:</th><td><input type="text" name="enroll" maxlength="10" value=" <?php echo $row['enroll']?>" ></td></tr>
<tr><th>Semester:</th><td><input type="text" name="sem" value=" <?php echo $row['sem']?>" size="1" ></td></tr>
<tr><th>C#:</th><td><input type="text" name="first" value=" <?php echo $row['Csharp']?>" maxlength="3" size="5" required></td></tr>
<tr><th>Web Technology:</th><td><input type="text" name="second" value=" <?php echo $row['WT']?>" maxlength="3" size="5" required></td></tr>
<tr><th>Operations Research:</th><td><input type="text" name="third" value=" <?php echo $row['OperationRes']?>" maxlength="3" size="5" required></td></tr>
<tr><th>E-Governance:</th><td><input type="text" name="fourth" value=" <?php echo $row['Egov']?>" maxlength="3" size="5" required></td></tr>
<tr><th>Software Engineering:</th><td><input type="text" name="fifth" value=" <?php echo $row['SE']?>" maxlength="3" size="5" required></td></tr>
<tr><th>C# practical:</th><td><input type="text" name="sixth" value=" <?php echo $row['Csharp_pr']?>" maxlength="3" size="5" required></td></tr>
<tr><th>WT practical:</th><td><input type="text" name="seventh" value=" <?php echo $row['WT_pr']?>" maxlength="3" size="5" required></td></tr>
<tr><th>SE practical:</th><td><input type="text" name="eighth" value=" <?php echo $row['SE_pr']?>" maxlength="3" size="5" required></td></tr>
</table><br>
<input type="Submit" name="update" id="btn" value="Update"><br>
</form>
</center>
</div>
</body>
</html>