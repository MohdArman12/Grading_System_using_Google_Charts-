<?php
if(isset($_POST['update']))
{	
	$name=$_POST['name'];
	$dob=$_POST['dob'];	
	$enroll=$_POST['enroll'];
	$sem=$_POST['sem'];
	$first=$_POST['first'];
	$second=$_POST['second'];
	$third=$_POST['third'];
	$fourth=$_POST['fourth'];
	$fifth=$_POST['fifth'];
	$sixth=$_POST['sixth'];
	$seventh=$_POST['seventh'];
	$eighth=$_POST['eighth'];
	$total=($first+$second+$third+$fourth+$fifth+$sixth+$seventh+$eighth);
	$rem=(1000-$total);
	$con=mysqli_connect("localhost","root","","gdb");
	$up_que="update thsem set name='$name', dob='$dob', enroll='$enroll', sem='$sem', Cpp='$first', DBMS='$second', DCN='$third', DAA='$fourth', OS='$fifth', Cpp_pr='$sixth', DBMS_pr='$seventh', colloquium='$eighth', total='$total', rem='$rem' where enroll='$enroll'";
	mysqli_query($con,$up_que);
	?>
	<html>
	<body>
	<link rel="stylesheet" href="css/msg.css">
	<div>
	<svg height="120px" viewBox="0 0 480 480" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="linear0" gradientUnits="userSpaceOnUse" x1="240" x2="240" y1="480" y2="0"><stop offset="0" stop-color="#12c2e9"/><stop offset=".056" stop-color="#19bfe9"/><stop offset=".137" stop-color="#2db6ea"/><stop offset=".235" stop-color="#4da7ea"/><stop offset=".344" stop-color="#7993eb"/><stop offset=".462" stop-color="#b279ed"/><stop offset=".497" stop-color="#c471ed"/><stop offset="1" stop-color="#f64f59"/></linearGradient><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm0 464c-123.710938 0-224-100.289062-224-224s100.289062-224 224-224 224 100.289062 224 224c-.140625 123.652344-100.347656 223.859375-224 224zm117.65625-309.65625c3.121094 3.125 3.121094 8.1875 0 11.3125l-160 160c-3.125 3.121094-8.1875 3.121094-11.3125 0l-64-64c-3.03125-3.140625-2.988281-8.128906.097656-11.214844 3.085938-3.085937 8.074219-3.128906 11.214844-.097656l58.34375 58.34375 154.34375-154.34375c3.125-3.121094 8.1875-3.121094 11.3125 0zm0 0" fill="url(#linear0)"/></svg>
	<form action="crud3.php" method="POST">
	<h1>Updated Successfully</h1>
	<input id="btn" type="submit" name="up" value="Continue">
	</form>
	</div>
	</body>
	</html>
	<?php
}
else
{
	header('Location:admin.html');
}
?>