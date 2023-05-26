<html>  

<head>

<link href="css/s_result.css" rel="stylesheet">

</head>
<body >
<?php
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","gdb");
$query = "SELECT name and password from teacher where name='$name' and password='$password'"; 
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result))
{
?>
<script>
alert("Login Success");
window.location='dept.html';
</script>
<?php
}
else{
	?>
<script>
alert("Invalid name or oassword");
window.location='teacherlogin.html';
</script>
<?php
}


?>
</body>
</html>