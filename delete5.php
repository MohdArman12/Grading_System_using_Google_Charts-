<?php
if(isset($_POST['delete']))
{
	$enroll=$_POST['d'];
	$con=mysqli_connect("localhost","root","","gdb");
	$del_que="delete from fifsem where enroll='$enroll'";
	$del_que2="delete from grade5 where enroll='$enroll'";
	mysqli_query($con,$del_que);
	mysqli_query($con,$del_que2);
?>
	<html>
	<link rel="stylesheet" href="css/msg.css">
	<div>
	<svg id="delete" enable-background="new 0 0 300 300" height="120px" viewBox="0 0 300 300" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="65.283" x2="256.714" y1="252.01" y2="60.579"><stop offset="0" stop-color="#107eff"/><stop offset="1" stop-color="#8f16ff"/></linearGradient><g><path d="m248 56.828c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12zm0 16c-2.207 0-4-1.793-4-4s1.793-4 4-4 4 1.793 4 4-1.793 4-4 4zm-200 48c0 2.209-1.791 4-4 4s-4-1.791-4-4 1.791-4 4-4 4 1.791 4 4zm67.516-77.172 2.828-2.828-2.828-2.828c-1.562-1.562-1.562-4.094 0-5.656s4.094-1.562 5.656 0l2.828 2.828 2.828-2.828c1.562-1.562 4.094-1.562 5.656 0s1.562 4.094 0 5.656l-2.828 2.828 2.828 2.828c1.562 1.562 1.562 4.094 0 5.656-.781.781-1.805 1.172-2.828 1.172s-2.047-.391-2.828-1.172l-2.828-2.828-2.828 2.828c-.781.781-1.805 1.172-2.828 1.172s-2.047-.391-2.828-1.172c-1.563-1.562-1.563-4.093 0-5.656zm-1.516 213.172c5.516 0 10-4.484 10-10v-120c0-5.516-4.484-10-10-10s-10 4.484-10 10v120c0 5.516 4.484 10 10 10zm36 0c5.516 0 10-4.484 10-10v-120c0-5.516-4.484-10-10-10s-10 4.484-10 10v120c0 5.516 4.484 10 10 10zm36 0c5.516 0 10-4.484 10-10v-120c0-5.516-4.484-10-10-10s-10 4.484-10 10v120c0 5.516 4.484 10 10 10zm46-164h-44v-9.992c0-9.93-8.078-18.008-18.008-18.008h-39.984c-9.93 0-18.008 8.078-18.008 18.008v9.992h-44c-2.211 0-4 1.789-4 4v12c0 2.211 1.789 4 4 4h8v145.598c0 5.734 4.668 10.402 10.402 10.402h127.195c5.734 0 10.402-4.668 10.402-10.402v-145.598h8c2.211 0 4-1.789 4-4v-12c.001-2.211-1.788-4-3.999-4zm-112-9.992c0-5.52 4.488-10.008 10.008-10.008h39.984c5.52 0 10.008 4.488 10.008 10.008v9.992h-60zm96 175.59c0 1.324-1.078 2.402-2.402 2.402h-127.196c-1.324 0-2.402-1.078-2.402-2.402v-145.598h132zm12-153.598h-156v-4h156z" fill="url(#SVGID_1_)"/></g></svg>
	<form action="crud5.php" method="POST" align="center">
	<h1>Deletion Success !!</h1>
	<input type="submit" id="del" name="del" value="Continue">
	</form>
	</div>
	</html>
	<?php
}
else
{
	header('Location:admin.html');
}	
?>