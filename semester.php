<?php
if ((isset ($_POST['success'])) || (isset ($_POST['b_x']))){
	?>
	
<html>
<link href="css/sem.css" rel="stylesheet">
<link href="css/icon.css" rel="stylesheet">
<body>
<form action="home.html" method="POST">
<input type="image" class="home" src="https://img.icons8.com/windows/96/000000/home.png">
</form>
<div>
<h1 align="center">SELECT SEMESTER</h1>
<table align="center" border="0" cellspacing="15"><tr>
<td><form action="crud1.php" method="POST">
<input type="submit" class="btn" name="b1" value="1st sem">
</form></td>
<td><form action="crud2.php" method="POST">
<input type="submit" class="btn" name ="b2" value="2nd sem">
</form></td>
<td><form action="crud3.php" method="POST">
<input type="submit" name="b3" class="btn" value="3rd sem">
</form></td>
</tr><tr>
<td><form action="crud4.php" method="POST">
<input type="submit" class="btn"  name="b4" value="4th sem">
</form></td>
<td><form action="crud5.php" method="POST">
<input type="submit" class="btn" name="b5" value="5th sem">
</form></td>
<td><form action="crud6.php" method="POST">
<input type="submit" class="btn" name="b6" value="6th sem">
</form></td>
</tr>
</table>
</div>
</body>
</html>
	<?php
}
else{
	?>
	<script>
	alert("Login Required!");
	window.location="admin.html";
	</script>
	<?php
}
?>
