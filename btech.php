<html>
<head>
<style>
#icon{
	float:right;
	margin:20px 10px;
}
body{
	margin-top:40px;
}
p{
	font-size:30px;
	font-weight:bold;
}
h1{
	font-size:30px;
	color:red;
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

<center>
<?php
$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$fifth=$_POST['fifth'];
$sixth=$_POST['sixth'];
$seventh=$_POST['seventh'];
$eighth=$_POST['eighth'];
$total = ($first+$second+$third+$fourth+$fifth+$sixth+$seventh+$eighth);
$avg = $total/8;
	
	if($avg>=90){
		echo "<p>O Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php

	}
	else if($avg>=85 && $avg<=90){
		echo "<p>A+ Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}
	else if($avg>=75 && $avg<=85){
		echo "<p>A Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}
	else if($avg>=65 && $avg<=75){
		echo "<p>B+ Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}
	else if($avg>=55 && $avg<=65){
		echo "<p>B Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}
	else if($avg>=45 && $avg<=55){
		echo "<p>C Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}
	else if($avg>=33 && $avg<=45){
		echo "<p>P Grade</p>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}
	else{
		echo "<h1>F Grade</h1>";
		?>
	<div id="columnchart_values" style="width: 900px; height: 300px;"></div>
		<?php
	}


?>

</center>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Marks", { role: "style" } ],
        ["1st sem", <?php echo $first; ?>, "#FF0000"],
        ["2nd sem", <?php echo $second; ?>, "#FFA500"],
        ["3rd sem", <?php echo $third; ?>, "#FFFF00"],
		["4th sem",<?php echo $fourth; ?>, "#ADFF2F"],
		["5th sem",<?php echo $fifth; ?>, "#228B22"],
		["6th sem",<?php echo $sixth; ?>, "#0000FF"],
		["7th sem",<?php echo $seventh; ?>, "#4B0082"],
		["8th sem",<?php echo $eighth; ?>, "#9400D3"]

		 ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Your Inputs :",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

</body>
</html>