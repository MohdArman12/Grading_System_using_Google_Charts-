<?php
session_start();
$b=$_SESSION['username'];
$f=$_POST['reply'];
$n=$_POST['name'];

$con=mysqli_connect("localhost","root","","gdb");
$query="update feedback set response='$f', response_by='$b' where name='$n'";
$res=mysqli_query($con,$query);
if($res){
?>
	<html>
	<link rel="stylesheet" href="css/msg.css">
	<div>
	<svg height="120px" viewBox="0 0 512 512" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="512" y1="256" y2="256"><stop offset="0" stop-color="#00f2fe"/><stop offset=".0208" stop-color="#03effe"/><stop offset=".2931" stop-color="#24d2fe"/><stop offset=".5538" stop-color="#3cbdfe"/><stop offset=".7956" stop-color="#4ab0fe"/><stop offset="1" stop-color="#4facfe"/></linearGradient><path d="m386 431.511719c0 21.488281-8.257812 41.671875-23.25 56.835937-15.085938 15.253906-35.238281 23.652344-56.75 23.652344-11.046875 0-20-8.953125-20-20s8.953125-20 20-20c22.054688 0 40-18.164062 40-40.488281s-18.164062-40.488281-40.488281-40.488281h-113.34375l24.933593 24.796874c7.832032 7.789063 7.867188 20.449219.078126 28.28125-3.90625 3.929688-9.042969 5.898438-14.179688 5.898438-5.101562 0-10.199219-1.9375-14.101562-5.816406l-37.203126-36.996094c-9.496093-9.445312-14.714843-22-14.695312-35.359375s5.273438-25.902344 14.796875-35.320313l37.140625-36.726562c7.851562-7.769531 20.515625-7.695312 28.285156.15625 7.765625 7.855469 7.695313 20.515625-.160156 28.285156l-23.058594 22.800782h111.507813c44.382812 0 80.488281 36.105468 80.488281 80.488281zm126-351.511719v131c0 11.046875-8.953125 20-20 20s-20-8.953125-20-20v-125.363281l-173.753906 108.042969c-13.03125 8.101562-27.636719 12.152343-42.246094 12.152343s-29.214844-4.050781-42.246094-12.152343l-173.753906-108.042969v225.363281c0 22.054688 17.945312 40 40 40 11.046875 0 20 8.953125 20 20s-8.953125 20-20 20c-44.113281 0-80-35.886719-80-80v-231c0-44.113281 35.886719-80 80-80h352c44.113281 0 80 35.886719 80 80zm-55.675781-31.722656c-6.742188-5.183594-15.179688-8.277344-24.324219-8.277344h-352c-9.144531 0-17.578125 3.09375-24.324219 8.277344l179.203125 111.433594c13.027344 8.101562 29.214844 8.101562 42.242188 0zm35.675781 242.722656c-11.046875 0-20 8.953125-20 20 0 22.054688-17.945312 40-40 40-11.046875 0-20 8.953125-20 20s8.953125 20 20 20c44.113281 0 80-35.886719 80-80 0-11.046875-8.953125-20-20-20zm0 0" fill="url(#a)"/></svg>
	<form action="checkfeedback.php" method="POST" align="center">
	<h1 align="center">Reply Added.</h1>
	<input id="del" value="Continue" type="submit" name="s2">
	</form>
	</div>
	</html>
<?php
}
else{
	echo"Not Updated";
}
?>

