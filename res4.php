<html>  
<head>

<link href="css/s_result2.css" rel="stylesheet">

</head>
<body>
<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","gdb");
$query = "SELECT name and dob from firstsem where name='$user' and dob='$pass'"; 
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result))
{
	$sel="select * from fosem where name='$user'";
	$res=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($res);
	$sel2="select * from grade4 where name='$user'";
	$res2=mysqli_query($con,$sel2);
	$row2=mysqli_fetch_array($res2);

	if($row['java']){
		if($row['java']=="Ab"){
			$g1="0";
		}
		else{
			$g1=$row['java'];
		}
	}
	if($row['unix']){
		if($row['unix']=="Ab"){
			$g2="0";
		}
		else{
			$g2=$row['unix'];
		}
	}
	if($row['SAD']){
		if($row['SAD']=="Ab"){
			$g3="0";
		}
		else{
			$g3=$row['SAD'];
		}
	}
	if($row['CBNST']){
		if($row['CBNST']=="Ab"){
			$g4="0";
		}
		else{
			$g4=$row['CBNST'];
		}
	}
	if($row['GT']){
		if($row['GT']=="Ab"){
			$g5="0";
		}
		else{
			$g5=$row['GT'];
		}
	}
	if($row['java_pr']){
		if($row['java_pr']=="Ab"){
			$g6="0";
		}
		else{
			$g6=$row['java_pr'];
		}
	}
	if($row['unix_pr']){
		if($row['unix_pr']=="Ab"){
			$g7="0";
		}
		else{
			$g7=$row['unix_pr'];
		}
	}
	if($row['mini']){
		if($row['mini']=="Ab"){
			$g8="0";
		}
		else{
			$g8=$row['mini'];
		}
	}
	
	?>
	<div id="columnchart_values"></div>
	<div id="piechart_3d"></div>
	<div id="result">
	<div id="icon">
	<a href="selsem.html">
	<svg height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 219.151 219.151" style="enable-background:new 0 0 219.151 219.151;" xml:space="preserve">
<g>
	<path d="M109.576,219.151c60.419,0,109.573-49.156,109.573-109.576C219.149,49.156,169.995,0,109.576,0S0.002,49.156,0.002,109.575
		C0.002,169.995,49.157,219.151,109.576,219.151z M109.576,15c52.148,0,94.573,42.426,94.574,94.575
		c0,52.149-42.425,94.575-94.574,94.576c-52.148-0.001-94.573-42.427-94.573-94.577C15.003,57.427,57.428,15,109.576,15z"/>
	<path d="M94.861,156.507c2.929,2.928,7.678,2.927,10.606,0c2.93-2.93,2.93-7.678-0.001-10.608l-28.82-28.819l83.457-0.008
		c4.142-0.001,7.499-3.358,7.499-7.502c-0.001-4.142-3.358-7.498-7.5-7.498l-83.46,0.008l28.827-28.825
		c2.929-2.929,2.929-7.679,0-10.607c-1.465-1.464-3.384-2.197-5.304-2.197c-1.919,0-3.838,0.733-5.303,2.196l-41.629,41.628
		c-1.407,1.406-2.197,3.313-2.197,5.303c0.001,1.99,0.791,3.896,2.198,5.305L94.861,156.507z"/>
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
	</div>

	<table border="1" align="center">
	<tr><th colspan="2"><u>STUDENT'S DETAIL</u></th></tr>
	<tr><th >Name : </th><td >  <?php echo $row['name'];?> </td></tr>
	<tr><th >Enrollment No. : </th><td > <?php echo $row['enroll'];?> </td></tr>
	<tr><th >Course : </th><td > BCA </td></tr>
	<tr><th >Semester : </th><td > <?php echo $row['sem'];?> </td></tr>
	<tr><th colspan="2"><u>SUBJECT'S GRADE</u></th></tr>
	<tr><th>Subject</th><th>Grade</th></tr>
	<tr><td>Java</td><td><?php echo $row2['java'];?></td></tr>
	<tr><td>Unix</td><td><?php echo $row2['unix'];?></td></tr>
	<tr><td>SAD</td><td><?php echo $row2['SAD'];?></td></tr>
	<tr><td>CBNST</td><td><?php echo $row2['CBNST'];?></td></tr>
	<tr><td>GT</td><td><?php echo $row2['GT'];?></td></tr>
	<tr><td>Java Practical</td><td><?php echo $row2['java_pr'];?></td></tr>
	<tr><td>Unix Practical</td><td><?php echo $row2['unix_pr'];?></td></tr>
	<tr><td>Mini Project</td><td><?php echo $row2['mini'];?></td></tr>
	<tr><th>Total</th><th><?php echo $row2['total'];?></th></tr>
	</table>
	</div>
	<?php
}
else{
	?>
<script>
alert("Invalid Enrollment No");
window.location='search4.html';
</script>
<?php
}


?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Marks", { role: "style" } ],
        ["java", <?php echo $g1; ?>, "#FF0000"],
        ["unix", <?php echo $g2; ?>, "#FFA500"],
        ["SAD", <?php echo $g3; ?>, "#FFFF00"],
        ["CBNST",<?php echo $g4; ?>, "#ADFF2F"],
		["GT",<?php echo $g5; ?>, "#228B22"],
		["java pr",<?php echo $g6; ?>, "#0000FF"],
		["unix pr",<?php echo $g7; ?>, "#4B0082"],
		["mini",<?php echo $g8; ?>, "#9400D3"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Marks of <?php echo $user;?>",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Total Marks', 'remainder'],
          ['Total',     <?php echo $row['total']; ?>],
          ['Remainder',     <?php echo $row['rem']; ?>]
         
        ]);

        var options = {
          title: 'Percentage',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    

</body>
</html>