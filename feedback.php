<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['phone'];
$s_type=$_POST['student_type'];
$f_type=$_POST['feedback_type'];
$desc=$_POST['description'];
if($s_type!="" && $f_type!=""){
$con = mysqli_connect("localhost","root","","gdb");
$query = "insert into feedback(name,email,contact,f_type,s_type,description)values('$name','$email','$contact','$s_type','$f_type','$desc')";
$stmt = mysqli_query($con,$query);
if($stmt==true){
	
	?>
	<html>
	<link rel="stylesheet" href="css/msg.css">
	<div>
<svg height="120px" viewBox="0 0 480 480" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="linear0" gradientUnits="userSpaceOnUse" x1="240" x2="240" y1="480" y2="0"><stop offset="0" stop-color="#12c2e9"/><stop offset=".056" stop-color="#19bfe9"/><stop offset=".137" stop-color="#2db6ea"/><stop offset=".235" stop-color="#4da7ea"/><stop offset=".344" stop-color="#7993eb"/><stop offset=".462" stop-color="#b279ed"/><stop offset=".497" stop-color="#c471ed"/><stop offset="1" stop-color="#f64f59"/></linearGradient><path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm0 464c-123.710938 0-224-100.289062-224-224s100.289062-224 224-224 224 100.289062 224 224c-.140625 123.652344-100.347656 223.859375-224 224zm117.65625-309.65625c3.121094 3.125 3.121094 8.1875 0 11.3125l-160 160c-3.125 3.121094-8.1875 3.121094-11.3125 0l-64-64c-3.03125-3.140625-2.988281-8.128906.097656-11.214844 3.085938-3.085937 8.074219-3.128906 11.214844-.097656l58.34375 58.34375 154.34375-154.34375c3.125-3.121094 8.1875-3.121094 11.3125 0zm0 0" fill="url(#linear0)"/></svg>	<form action="feedbackpage.php" method="POST" align="center">
	<form action="feedbackpage.php" method="POST">
	<h1 align="center">Feedback Added Successfully.</h1>
	<input type="submit" id="del" name="success" value="Continue">
	</form>
	</div>
	</html>
	<?php
}
else{
		?>
	<script>
	alert("Not inserted !!");
	window.location='feedbackpage.php';
	</script>
	<?php
}
}
else{
	?>
	<script>
	alert("Please fill all field !!");
	window.location='feedbackpage.php';
	</script>
	<?php
}
?>