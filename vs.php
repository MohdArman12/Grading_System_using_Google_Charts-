<?php
$enroll=$_POST['enroll'];
$con=mysqli_connect("localhost","root","","gdb");
$q1 = "SELECT * from firstsem where enroll='$enroll'"; 
$q2 = "SELECT * from secsem where enroll='$enroll'"; 
$q3 = "SELECT * from thsem where enroll='$enroll'"; 
$q4 = "SELECT * from fosem where enroll='$enroll'"; 
$q5 = "SELECT * from fifsem where enroll='$enroll'"; 
$q6 = "SELECT * from sixsem where enroll='$enroll'"; 
$r1 = mysqli_query($con,$q1);
$r2 = mysqli_query($con,$q2);
$r3 = mysqli_query($con,$q3);
$r4 = mysqli_query($con,$q4);
$r5 = mysqli_query($con,$q5);
$r6 = mysqli_query($con,$q6);

$a1 = mysqli_fetch_array($r1);
$a2 = mysqli_fetch_array($r2);
$a3 = mysqli_fetch_array($r3);
$a4 = mysqli_fetch_array($r4);
$a5 = mysqli_fetch_array($r5);
$a6 = mysqli_fetch_array($r6);

$e1 = $a1['enroll'];
$e2 = $a2['enroll'];
$e3 = $a3['enroll'];
$e4 = $a4['enroll'];
$e5 = $a5['enroll'];
$e6 = $a6['enroll'];

if (($e1)&&($e2)&&($e3)&&($e4)&&($e5)&&($e6)){
		
?>
	<html>
		
		
	<html lang="en" dir="ltr">
	<link href="css/verify.css" rel="stylesheet" >


	<head>
	<meta charset="utf-8">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

	<form action="sgrade.php" class="login-form" method="POST" >
	<h1>Verification</h1>
	<div class="txtb">
	<input type="text" name="user" autocomplete="off" required>
	<span data-placeholder="Username" class="user"></span>
	</div><br>
	<div class="txtb">
	<input type="date" name="pass" required>
	<span data-placeholder="DOB" class="dob"></span>
	</div>
	<input type="Submit" class="logbtn" name="Verify" value="Verify"><br><br>
	</form>
	<script type="text/javascript">
	$(".txtb input").on("focus",function(){
	$(this).addClass("focus");
	});
	$(".txtb input").on("blur",function(){
	if($(this).val()=="")
	$(this).removeClass("focus");
	});

	</script>
	</html>
<?php
	}
else{
?>
<script>
alert("Invalid Enrollment No");
</script>
<?php
}

?>
