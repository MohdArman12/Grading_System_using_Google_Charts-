<?php
$enroll=$_POST['enroll'];
$con=mysqli_connect("localhost","root","","gdb");
$q3 = "SELECT * from thsem where enroll='$enroll'"; 
$q4 = "SELECT * from fosem where enroll='$enroll'";  
$r3 = mysqli_query($con,$q3);
$r4 = mysqli_query($con,$q4);


$a3 = mysqli_fetch_array($r3);
$a4 = mysqli_fetch_array($r4);



$e3 = $a3['enroll'];
$e4 = $a4['enroll'];


if (($e3)&&($e4)){
		
?>
	<html>
		
		
	<html lang="en" dir="ltr">
	<link href="css/verify.css" rel="stylesheet" >


	<head>
	<meta charset="utf-8">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

	<form action="sgrade2.php" class="login-form" method="POST" >
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
