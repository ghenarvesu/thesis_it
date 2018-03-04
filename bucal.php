

<?php
include('mainnav.php');
 ?>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


    <script type="text/javascript">
      google.charts.load("current", {packages:["imagelinechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'No. of Farmers'],
          ['2013',  60],
          ['2014',  61],
          ['2015',  59],
          ['2016',  65]
        ]);

        var chart = new google.visualization.ImageLineChart(document.getElementById('farmers'));

        chart.draw(data, {width: 200, height: 200, min: 0});
      }
    </script>


  <script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);

function drawBasic() {

      var data = google.visualization.arrayToDataTable([
     	 ['Crops', 'No.'],
          ["Corn", 44],
          ["Coffee", 31],
          ["Rice", 12],
      ]);

      var options = {
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },
        vAxis: {
          title: 'Name of crops'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('crops'));

      chart.draw(data, options);
    }
    </script>

<br>
<br>
<br>
<br>
<div id="page-inner">
	<div class="row">
    <div class="col-md-12">
    <h2 class="page-header">
        Bucal
        <small>
          <a href="bucalfarmers.php" >Show Farmers</a>
         </small>
    </h2>
    </div>
    </div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Farmers</div>
				<div class="panel-body">
				<center><div id="farmers"></div></center>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Crops</div>
				<div class="panel-body">
				<center><div id="crops"></div></center>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

<?php
include('footer.php');
 ?>
