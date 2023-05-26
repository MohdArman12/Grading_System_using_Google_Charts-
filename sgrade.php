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
$q3 = "SELECT * from thsem where name='$user'"; 
$q4 = "SELECT * from fosem where name='$user'"; 
$q5 = "SELECT * from fifsem where name='$user'"; 
$q6 = "SELECT * from sixsem where name='$user'"; 
$r1 = mysqli_query($con,$q1);
$r2 = mysqli_query($con,$q2);
$r3 = mysqli_query($con,$q3);
$r4 = mysqli_query($con,$q4);
$r5 = mysqli_query($con,$q5);
$r6 = mysqli_query($con,$q6);

$a1 = mysqli_fetch_array($r1);
$a2 = mysqli_fetch_array($r2);
$a3 = mysqli_fetch_array($r3);
$a4 = mysqli_fetch_array($r4);
$a5 = mysqli_fetch_array($r5);
$a6 = mysqli_fetch_array($r6);
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

$b31 = $a3['Cpp'];
$b32 = $a3['DBMS'];
$b33 = $a3['DCN'];
$b34 = $a3['DAA'];
$b35 = $a3['OS'];
$b36 = $a3['Cpp_pr'];
$b37 = $a3['DBMS_pr'];
$b38 = $a3['colloquium'];
$t3 = $a3['total'];

$b41 = $a4['java'];
$b42 = $a4['unix'];
$b43 = $a4['SAD'];
$b44 = $a4['CBNST'];
$b45 = $a4['GT'];
$b46 = $a4['java_pr'];
$b47 = $a4['unix_pr'];
$b48 = $a4['mini'];
$t4 = $a4['total'];


$b51 = $a5['Csharp'];
$b52 = $a5['WT'];
$b53 = $a5['OperationRes'];
$b54 = $a5['Egov'];
$b55 = $a5['SE'];
$b56 = $a5['Csharp_pr'];
$b57 = $a5['WT_pr'];
$b58 = $a5['SE_pr'];
$t5 = $a5['total'];

$b61 = $a6['Ecom'];
$b62 = $a6['DMW'];
$b63 = $a6['SC'];
$b64 = $a6['major'];
$t6 = $a6['total'];

if ((!$t1)||(!$t2)||(!$t3)||(!$t4)||(!$t5)||(!$t6)){
	?>
	<script>
	alert("Data Missing !!");
	window.location='gradetype.html';
	</script>
	<?php
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
else if($b31=="Ab"){
		echo "Ab grade because you were absent in C++ (3BCATH1)";
	}
else if($b32=="Ab"){
		echo "Ab grade because you were absent in DBMS (3BCATH2)";
	}
else if($b33=="Ab"){
		echo "Ab grade because you were absent in DCN (3BCATH3)";
	}
else if($b34=="Ab"){
		echo "Ab grade because you were absent in DAA (3BCATH4)";
	}
else if($b35=="Ab"){
		echo "Ab grade because you were absent in OS (3BCATH5)";
	}
else if($b36=="Ab"){
		echo "Ab grade because you were absent in C++ practical (3BCAPR1)";
	}
else if($b37=="Ab"){
		echo "Ab grade because you were absent in DBMS practical (3BCAPR)";
	}
else if($b38=="Ab"){
		echo "Ab grade because you were absent in Colloquium (3BCAPR3)";
	}
else if($b41=="Ab"){
		echo "Ab grade because you were absent in Java (4BCATH1)";
	}
else if($b42=="Ab"){
		echo "Ab grade because you were absent in Unix (4BCATH2)";
	}
else if($b43=="Ab"){
		echo "Ab grade because you were absent in SAD  (4BCATH3)";
	}
else if($b44=="Ab"){
		echo "Ab grade because you were absent in CBNST (4BCATH4)";
	}
else if($b45=="Ab"){
		echo "Ab grade because you were absent in GT (4BCATH5)";
	}
else if($b46=="Ab"){
		echo "Ab grade because you were absent in Java practical(4BCAPR1)";
	}
else if($b47=="Ab"){
		echo "Ab grade because you were absent in Unix practical(4BCAPR2)";
	}
else if($b48=="Ab"){
		echo "Ab grade because you were absent in Mini project(4BCAPR3)";
	}
else if($b51=="Ab"){
		echo "Ab grade because you were absent in C# (5BCATH1)";
	}
else if($b52=="Ab"){
		echo "Ab grade because you were absent in WT (5BCATH2)";
	}
else if($b53=="Ab"){
		echo "Ab grade because you were absent in OR (5BCATH3)";
	}
else if($b54=="Ab"){
		echo "Ab grade because you were absent in E-Governance (5BCATH4)";
	}
else if($b55=="Ab"){
		echo "Ab grade because you were absent in SE (5BCATH5)";
	}
else if($b56=="Ab"){
		echo "Ab grade because you were absent in C# practical(5BCAPR1)";
	}
else if($b57=="Ab"){
		echo "Ab grade because you were absent in WT practical (5BCAPR2)";
	}
else if($b58=="Ab"){
		echo "Ab grade because you were absent in SE practical (5BCAPR3)";
	}
else if($b61=="Ab"){
		echo "Ab grade because you were absent in E-Commerce (6BCATH1)";
	}
else if($b62=="Ab"){
		echo "Ab grade because you were absent in DMW (6BCATH2)";
	}
else if($b63=="Ab"){
		echo "Ab grade because you were absent in SC (6BCATH3)";
	}
else if($b64=="Ab"){
		echo "Ab grade because you were absent in Major Project (6BCAPR1)";
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
else if($b31<=50){
		echo "F grade because you are failed in C++ (3BCATH1)";
	}
else if($b32<=50){
		echo "F grade because you are failed in DBMS (3BCATH2)";
	}
else if($b33<=50){
		echo "F grade because you are failed in DCN (3BCATH3)";
	}
else if($b34<=50){
		echo "F grade because you are failed in DAA (3BCATH4)";
	}
else if($b35<=50){
		echo "F grade because you are failed in OS (3BCATH5)";
	}
else if($b36<=33){
		echo "F grade because you are failed in C++ practical (3BCAPR1)";
	}
else if($b37<=33){
		echo "F grade because you are failed in DBMS practical (3BCAPR2)";
	}
else if($b38<=17){
		echo "F grade because you are failed in Colloquium (3BCAPR3)";
	}
else if($b41<=50){
		echo "F grade because you are failed in Java (4BCATH1)";
	}
else if($b42<=50){
		echo "F grade because you are failed in Unix (4BCATH2)";
	}
else if($b43<=50){
		echo "F grade because you are failed in SAD (4BCATH3)";
	}
else if($b44<=50){
		echo "F grade because you are failed in CBNST (4BCATH4)";
	}
else if($b45<=50){
		echo "F grade because you are failed in GT (4BCATH5)";
	}
else if($b46<=33){
		echo "F grade because you are failed in Java practical (4BCAPR1)";
	}
else if($b47<=17){
		echo "F grade because you are failed in Unix practical (4BCAPR2)";
	}
else if($b48<=33){
		echo "F grade because you are failed in Mini Project (4BCAPR3)";
	}
else if($b51<=50){
		echo "F grade because you are failed in C# (5BCATH1)";
	}
else if($b52<=50){
		echo "F grade because you are failed in WT (5BCATH2)";
	}
else if($b53<=50){
		echo "F grade because you are failed in OR (5BCATH3)";
	}
else if($b54<=50){
		echo "F grade because you are failed in E-Governance (5BCATH4)";
	}
else if($b55<=50){
		echo "F grade because you are failed in SE (5BCATH5)";
	}
else if($b56<=33){
		echo "F grade because you are failed in C# practical (5BCAPR1)";
	}
else if($b57<=33){
		echo "F grade because you are failed in WT practical (5BCAPR2)";
	}
else if($b58<=17){
		echo "F grade because you are failed in SE practical (5BCAPR3)";
	}
else if($b61<=50){
		echo "F grade because you are failed in E-Commerce (6BCATH1)";
	}
else if($b62<=50){
		echo "F grade because you are failed in DMW (6BCATH2)";
	}
else if($b63<=50){
		echo "F grade because you are failed in Secure Computing (6BCATH3)";
	}
else if($b64<=183){
		echo "F grade because you are failed in Major Project (BCA 671)";
	}
else{

	
	
	$g1 = $t1/100;
	$g2 = $t2/100;
	$g3 = $t3/100;
	$g4 = $t4/100;
	$g5 = $t5/100;
	$g6 = $t6/100;
	$sum = $g1+$g2+$g3+$g4+$g5+$g6;
	$cgpa = $sum/6;
	$per = $cgpa*10;
	if($per>=90){
		echo "O";

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
			float:right;
			margin:20px 10px;
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
        ["2nd sem", <?php echo $t2; ?>, "#FFA500"],
        ["3rd sem", <?php echo $t3; ?>, "#FFFF00"],
		["4th sem",<?php echo $t4; ?>, "#228B22"],
		["5th sem",<?php echo $t5; ?>, "#0000FF"],
		["6th sem",<?php echo $t6; ?>, "#4B0082"]
		 ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Total marks of all semesters",
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