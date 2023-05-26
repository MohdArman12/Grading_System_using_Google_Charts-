<?php
$f=$_POST['d'];
$con=mysqli_connect("localhost","root","","gdb");
$query1="select * from feedback where name='$f'";
$res=mysqli_query($con,$query1);
$row=mysqli_fetch_array($res);
?>
<html>
<link rel="stylesheet" href="css/reply.css">
<div id="m">
<form action="updatefeedback.php" method="POST" align="center">
<h1 align="center"><u>Feedback Reply</u></h1>
<table align="center" border="0">

<tr><th>Name : </th><td><?php echo $row['name'];?></td></tr><tr></tr><tr></tr>
<tr><th>Student Type : </th><td><?php echo $row['s_type'];?></td></tr><tr></tr><tr></tr>
<tr><th>Feedback Type : </th><td><?php echo $row['f_type'];?></td></tr><tr></tr><tr></tr>
<tr><th>Feedback : </th><td><?php echo $row['description'];?></td></tr><tr></tr><tr></tr>
<tr><th colspan="2"><textarea name="reply" rows="6" cols="25" id="text" placeholder="Type reply for this feedback."></textarea></th></tr><tr></tr><tr></tr>

</table>
<input type="hidden" value="<?php echo $row['name'];?>" name="name">
<input type="submit" value="Send Reply" name="replybtn" id="btn">
</form>
</div>
</html>
	
