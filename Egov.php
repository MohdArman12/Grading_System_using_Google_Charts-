<?php
$con=mysqli_connect("localhost","root","","gdb");
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Name', 'Marks'],
          <?php
		  $sql="SELECT * from fifsem";
		  $query=mysqli_query($con,$sql);
		  while($result=mysqli_fetch_assoc($query)){
			  echo "['".$result['name']."',".$result['Egov']."],";
		  }
		  ?>
        ]);

        var options = {
          width: 1200,
          legend: { position: 'none' },
          chart: {
            title: '',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Marks of E-Governance'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('C'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
	
	
  </head>
  <body>
    <div id="C" style="width: 800px; height: 600px; margin-left:80px;"></div>
  </body>
</html>


