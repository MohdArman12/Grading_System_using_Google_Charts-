<html>  
<head>



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
	

	

$con=mysqli_connect("localhost","root","","gdb");
$q1 = "SELECT * from firstsem where name='$user'"; 
$q2 = "SELECT * from secsem where name='$user'"; 

$r1 = mysqli_query($con,$q1);
$r2 = mysqli_query($con,$q2);


$a1 = mysqli_fetch_array($r1);
$a2 = mysqli_fetch_array($r2);

$b11 = $a1['C'];
$b12 = $a1['DE'];
$b13 = $a1['BO'];
$b14 = $a1['EM'];
$b15 = $a1['CS'];
$b16 = $a1['C_pr'];
$b17 = $a1['DE_pr'];
$b18 = $a1['CS_pr'];
$t1 = $a1['total'];

$b21 = $a2['DS'];
$b22 = $a2['DM'];
$b23 = $a2['FAM'];
$b24 = $a2['COA'];
$b25 = $a2['EOS'];
$b26 = $a2['DS_pr'];
$b27 = $a2['COA_pr'];
$b28 = $a2['FAM_pr'];
$t2 = $a2['total'];


if ((!$t1)||(!$t2)){
	echo "Data Missing!!";
}
else if($b11=="Ab"){
		echo "Ab grade because you were absent in C Language (1BCATH1)";
	}
else if($b12=="Ab"){
		echo "Ab grade because you were absent in DE (1BCATH2)";
	}
else if($b13=="Ab"){
		echo "Ab grade because you were absent in BO (1BCATH3)";
	}
else if($b14=="Ab"){
		echo "Ab grade because you were absent in EM (1BCATH4)";
	}
else if($b15=="Ab"){
		echo "Ab grade because you were absent in CS (1BCATH5)";
	}
else if($b16=="Ab"){
		echo "Ab grade because you were absent in C practical (1BCAPR1)";
	}
else if($b17=="Ab"){
		echo "Ab grade because you were absent in DE practical (1BCAPR2)";
	}
else if($b18=="Ab"){
		echo "Ab grade because you were absent in CS practical (1BCAPR3)";
	}
else if($b21=="Ab"){
		echo "Ab grade because you were absent in DS (2BCATH1)";
	}
else if($b22=="Ab"){
		echo "Ab grade because you were absent in DM (2BCATH2)";
	}
else if($b23=="Ab"){
		echo "Ab grade because you were absent in FAM (2BCATH3)";
	}
else if($b24=="Ab"){
		echo "Ab grade because you were absent in COA (2BCATH4)";
	}
else if($b25=="Ab"){
		echo "Ab grade because you were absent in EOS (2BCATH5)";
	}
else if($b26=="Ab"){
		echo "Ab grade because you were absent in DS practical (2BCAPR1)";
	}
else if($b27=="Ab"){
		echo "Ab grade because you were absent in COA practical (2BCAPR2)";
	}
else if($b28=="Ab"){
		echo "Ab grade because you were absent in FAM practical (2BCAPR3)";
	}
else if($b11<=50){
		echo "F grade because you are failed in C Language (1BCATH1)";
	}
else if($b12<=50){
		echo "F grade because you are failed in DE (1BCATH2)";
	}
else if($b13<=50){
		echo "F grade because you are failed in BO (1BCATH3)";
	}
else if($b14<=50){
		echo "F grade because you are failed in EM (1BCATH4)";
	}
else if($b15<=50){
		echo "F grade because you are failed in CS (1BCATH5)";
	}
else if($b16<=33){
		echo "F grade because you are failed in C practical (1BCAPR1)";
	}
else if($b17<=33){
		echo "F grade because you are failed in DE practical (1BCAPR2)";
	}
else if($b18<=17){
		echo "F grade because you are failed in CS practical (1BCAPR3)";
	}
else if($b21<=50){
		echo "F grade because you are failed in DS (2BCATH1)";
	}
else if($b22<=50){
		echo "F grade because you are failed in DM (2BCATH2)";
	}
else if($b23<=50){
		echo "F grade because you are failed in FAM (2BCATH3)";
	}
else if($b24<=50){
		echo "F grade because you are failed in COA (2BCATH4)";
	}
else if($b25<=50){
		echo "F grade because you are failed in EOS (2BCATH5)";
	}
else if($b26<=33){
		echo "F grade because you are failed in DS practical (2BCAPR1)";
	}
else if($b27<=33){
		echo "F grade because you are failed in COA practical (2BCAPR2)";
	}
else if($b28<=17){
		echo "F grade because you are failed in FAM practical (2BCAPR3)";
	}
else{
	$g1 = $t1/100;
	$g2 = $t2/100;
	
	$sum = $g1+$g2;
	$cgpa = $sum/2;
	$per = $cgpa*10;
	if($per>=90){
		$g="O";
	
	}
	else if($per>=85 && $per<=90){
		$g="A+";
		
	}
	else if($per>=75 && $per<=85){
		$g="A";
	}
	else if($per>=65 && $per<=75){
		$g="B+";
	}
	else if($per>=55 && $per<=65){
		$g="B";
	}
	else if($per>=45 && $per<=55){
		$g="C";
	}
	else if($per>=33 && $per<=45){
		$g="P";
	}
	else{
		$g="F";
	}
			?>
		<html>
		<style>
		#icon{
			margin:20px 10px;
			float:right;
		}
		</style>
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
<a href="gradetype.html">
<svg id="icon" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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

		<div id="table" align="center" >
		<table border="1" align="center">
		<tr><th> Name </th><td><?php echo $a1['name'];?></td></tr>
		<tr><th> Grade </th><td><?php echo $g;?></td></tr>
		<tr><th> Enrollment no. </th><td><?php echo $a1['enroll'];?></td></tr>
		</table>
			<div id="columnchart_values" style="width: 900px; height: 300px;"></div>

		</html>
		<?php
}

}
else{
	?>
	<script>
	alert("Something is missing");
	window.location:'gradetype.html';
	</script>
	<?php
}


?>

    </script>
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Marks", { role: "style" } ],
        ["1st sem", <?php echo $t1; ?>, "#FF0000"],
        ["2nd sem", <?php echo $t2; ?>, "#4B0082"]

      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total marks of 1st and 2nd sem",
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