<?php
$con=mysqli_connect("localhost","root","","gdb");
$query="select * from feedback";
$res=mysqli_query($con,$query);

?>

<html>
<head>
<title>Feedback</title>
<link href="css/feedback.css" rel="stylesheet">
<link href="css/showfeedback.css" rel="stylesheet">
<style>
#icon{
	float:left;
	margin-left:20px;
	margin-top:-20px;
	margin-right:-5//0px;
}
</style>
</head>
<body>
<a href="home.html">
<svg id="icon" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M503.401,228.884l-43.253-39.411V58.79c0-8.315-6.741-15.057-15.057-15.057H340.976c-8.315,0-15.057,6.741-15.057,15.057
			v8.374l-52.236-47.597c-10.083-9.189-25.288-9.188-35.367-0.001L8.598,228.885c-8.076,7.36-10.745,18.7-6.799,28.889
			c3.947,10.189,13.557,16.772,24.484,16.772h36.689v209.721c0,8.315,6.741,15.057,15.057,15.057h125.913
			c8.315,0,15.057-6.741,15.057-15.057V356.931H293v127.337c0,8.315,6.741,15.057,15.057,15.057h125.908
			c8.315,0,15.057-6.741,15.056-15.057V274.547h36.697c10.926,0,20.537-6.584,24.484-16.772
			C514.147,247.585,511.479,236.245,503.401,228.884z M433.965,244.433c-8.315,0-15.057,6.741-15.057,15.057v209.721h-95.793
			V341.874c0-8.315-6.742-15.057-15.057-15.057H203.942c-8.315,0-15.057,6.741-15.057,15.057v127.337h-95.8V259.49
			c0-8.315-6.741-15.057-15.057-15.057H36.245l219.756-200.24l74.836,68.191c4.408,4.016,10.771,5.051,16.224,2.644
			c5.454-2.41,8.973-7.812,8.973-13.774V73.847h74.002v122.276c0,4.237,1.784,8.276,4.916,11.13l40.803,37.18H433.965z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</a>
<div id="m">
<form align="center" action="feedback.php" method="POST">
<h1 align="center"><u>Feedback Form</u><h1><br>
<table align="center" border="0">
<tr></tr><tr></tr><tr></tr>
<tr>
<th>Name : </th><td><input type="text" name="name" id="i" placeholder=" Enter your name" required></td>
</tr><tr></tr><tr></tr>
<tr>
<th>E-mail : </th><td><input type="email" name="email" id="i" placeholder=" Enter your Email" required></td>
</tr><tr></tr><tr></tr>
<tr>
<th>Contact No : </th><td><input type="number" name="phone" id="i" maxlength="10" placeholder=" Enter Mobile No."  required></td>
</tr><tr></tr><tr></tr>
<tr>

<th colspan="2"> BCA Student<input type="radio" name="student_type" value="BCA">
ECCian(non BCA)<input type="radio" name="student_type" value="ECCian">
Other <input type="radio" name="student_type" value="Other"></th>
</tr><tr></tr><tr></tr>
<tr>

<th colspan="2">
Enquiry<input type="radio" name="feedback_type" value="Enquiry">
Suggestion<input type="radio" name="feedback_type" value="Suggestion">
Complaint<input type="radio" name="feedback_type" value="Complaint">
</th>
</tr><tr></tr><tr></tr>
<tr>
<th>Description :  </th><td><textarea name="description" id="i" placeholder=" max 100 words" rows="6" cols="22"></textarea></td>
</tr><tr></tr><tr></tr><tr></tr><tr></tr>

</table>
<input type="submit" id="btn" value="Submit">
</div>
</form>
<div id="div2">
<h2 align="center" id="h"><u>Previous Feedbacks</u></h2>
<table border="0" cellspacing="20" id="t2" >
<tr id="tr2"><th id="th2">Feedback By</th>
<th id="th2">Feedback</th>
<th id="th2">Response</th>
<th id="th2">Response By</th><tr>
<?php
while($row=mysqli_fetch_array($res)){
	?>
	<tr id="tr2">
	<td id="td2"><?php echo $row['name'];?></td>
	<td id="td2"><?php echo $row['description'];?></td>
	<td id="td2"><?php echo $row['response'];?></td>
	<td  id="td2"><?php echo $row['response_by'];?></td>
	</tr>
	
	<?php
}
?>


</table>
</div>
</body>
</html>