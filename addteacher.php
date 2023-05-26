<?php
$name=$_POST['name'];
$random = rand(100,999);
$password = $name.$random;

$con=mysqli_connect("localhost","root","","gdb");
$query="select * from teacher where name='$name'";
$query2=mysqli_query($con,$query);
$count=mysqli_num_rows($query2);
if($count>0){
	?>
	<script>
	alert("Already Registered");
	window.location='teachercrud.php';
	</script>
	<?php
}
else{
$q="insert into teacher (name,password)values('$name','$password')";
$s1=mysqli_query($con,$q);
?>
<html>
<div>
<link rel="stylesheet" href="css/msg.css">
<svg height="120px" viewBox="0 0 512 512" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="0" y2="512"><stop offset="0" stop-color="#2af598"/><stop offset="1" stop-color="#009efd"/></linearGradient><path d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0" fill="url(#a)"/></svg>
<h1>Addition Success!</h1>
<form action="teachercrud.php" method="POST">
<input type="submit" id="btn" name="add5" value ="Continue">
</form>
</div>
</html>
<?php
}
?>