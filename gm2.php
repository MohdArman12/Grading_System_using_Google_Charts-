<?php

$con=mysqli_connect("localhost","root","","gdb");

$sroll=$_POST['sroll'];

$query = "SELECT * from secsem where enroll='$sroll'"; 
$result = mysqli_query($con,$query);
if (mysqli_fetch_array($result)){
	
?>
	
	<html>
		
		
	<html lang="en" dir="ltr">
	<link href="css/verify.css" rel="stylesheet" >


	<head>
	<meta charset="utf-8">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

	<form action="res2.php" class="login-form" method="POST" >
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
window.location='search2.html';
</script>
<?php
}

?>