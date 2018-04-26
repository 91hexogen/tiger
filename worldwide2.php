<?php // MYSQL anbinden für Ticker
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
// 24 HOURS
$query1 = "SELECT appName, count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
$query2 = "SELECT count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 24 HOUR) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
// WEEK
$query3 = "SELECT appName, count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
$query4 = "SELECT count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 7 DAY) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
// MONTH
$query5 = "SELECT appName, count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
$query6 = "SELECT count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 30 DAY) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
// YEAR
$query7 = "SELECT appName, count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 1 YEAR) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
$query8 = "SELECT count(*) AS number FROM Notification WHERE postTime / 1000 >= UNIX_TIMESTAMP(NOW() - INTERVAL 1 YEAR) GROUP BY appName ORDER BY `number` DESC LIMIT 10";
// ALL TIME
$query9 = "SELECT appName, count(*) AS number FROM Notification GROUP BY appName ORDER BY `number` DESC LIMIT 10";
$query10 = "SELECT count(*) AS number FROM Notification GROUP BY appName ORDER BY `number` DESC LIMIT 10";

$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
$result6 = mysqli_query($connect, $query6);
$result7 = mysqli_query($connect, $query7);
$result8 = mysqli_query($connect, $query8);
$result9 = mysqli_query($connect, $query9);
$result10 = mysqli_query($connect, $query10);
?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>KPUSH.overview.2018</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen" />
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<!-- ################### MAIN ROW ################### -->
<div class="d-md-flex flex-md-equal w-100 my-md-3" id="worldwide">

<!-- ################### Title COLUMN ################### -->
<div class="main col-md-3 p-3 p-md-1-5 m-md-3 text-info border">
  <div class="col-md-1-3 p-lg-1 mx-auto my-1">
    <h2 class="display-5 font-weight-normal text-warning">INTERNATIONAL TOP 10</h2>
    <p class="lead font-weight-small text-light">Apps that sent most push notifications.</p>

      <button type="button" class="btn btn-outline-info btn-block active" id="0">past 24h</button>
      <button type="button" class="btn btn-outline-info btn-block" id="1">past week</button>
      <button type="button" class="btn btn-outline-info btn-block" id="2">past month</button>
      <button type="button" class="btn btn-outline-info btn-block" id="3">past year</button>
      <button type="button" class="btn btn-outline-info btn-block" id="4">all time</button>

  </div>
</div> <!-- Title Column end -->

<!-- ################### Chart COLUMN ################### -->
    <div class="bg-light overflow-hidden p-3 p-md-5 m-md-3 text-center text-dark border border-info">
      <div class="col-md-8 p-lg-1 mx-auto my-1">
         <canvas id="forecast" style="width: 60rem;"></canvas>
      </div>
    </div>  <!-- Chart Column end -->

</div> <!-- Main Row end -->

<!-- END -->


<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/buttonactive.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  $.ajax({
		success: function(data) {
			     console.log(data);
            // Label ausblenden
           Chart.defaults.global.legend.display = false;
           // Font colors
           Chart.defaults.global.defaultFontColor = '#000';


var chart_labels = [<?php while($row = mysqli_fetch_array($result1)){echo "['".$row["appName"]."'],";} ?>];
var push_dataset = [<?php while($row = mysqli_fetch_array($result2)){echo "['".$row["number"]."'],";} ?>];

var ctx = document.getElementById("forecast").getContext('2d');
var config = {
   type: 'horizontalBar',
   data: {
       labels: chart_labels,
       datasets: [{
           label: "Pushes",
           data: push_dataset,
           backgroundColor: [
             'rgba(255,99,132,0.2)',
             'rgba(255,159,64,0.2)',
             'rgba(255,205,86,0.2)',
             'rgba(75,192,192,0.2)',
             'rgba(54,162,235,0.2)',
             'rgba(153,102,155,0.2)',
             'rgba(201,203,207,0.2)',
             'rgba(0,128,128,0.2)',
             'rgba(255,0,255,0.2)',
             'rgba(147,119,96,0.2)'
           ],
           borderColor: [
             'rgb(255,99,132)',
             'rgb(255,159,64)',
             'rgb(255,205,86)',
             'rgb(75,192,192)',
             'rgb(54,162,235)',
             'rgb(153,102,155)',
             'rgb(201,203,207)',
             'rgb(0,128,128)',
             'rgb(255,0,255)',
             'rgb(147,119,96)'
           ],
           borderWidth: 1,
           hoverBorderWidth: 0
       }]
   },
   options: {
       title: {
             display: true,
             text: '',
             fontSize: 10
         },
         scales: {
           xAxes: [{
             ticks: {
               // font styling
                 beginAtZero: true,
                 //ZAHLEN
                 fontSize: 16
               }
           }],
           yAxes: [{
             ticks: {
               //APPNAMEN usw.
                 fontSize: 16
             }
         }]
     }
 }
};

var forecast_chart = new Chart(ctx, config);
$("#0").click(function() {
var data = forecast_chart.config.data;
 data.datasets[0].data = push_dataset;
 data.labels = chart_labels;
 forecast_chart.update();
})

var forecast_chart = new Chart(ctx, config);
$("#1").click(function() {
 var chart_labels_week = [<?php while($row = mysqli_fetch_array($result3)){echo "['".$row["appName"]."'],";} ?>];
 var push_dataset_week = [<?php while($row = mysqli_fetch_array($result4)) {echo "['".$row["number"]."'],";} ?>];
 var data = forecast_chart.config.data;
 data.datasets[0].data = push_dataset_week;
 data.labels = chart_labels_week;
 forecast_chart.update();
})

var forecast_chart = new Chart(ctx, config);
$("#2").click(function() {
   var chart_labels_month = [<?php while($row = mysqli_fetch_array($result5)){echo "['".$row["appName"]."'],";} ?>];
   var push_dataset_month = [<?php while($row = mysqli_fetch_array($result6)) {echo "['".$row["number"]."'],";} ?>];
   var data = forecast_chart.config.data;
   data.datasets[0].data = push_dataset_month;
   data.labels = chart_labels_month;
   forecast_chart.update();
 })

var forecast_chart = new Chart(ctx, config);
$("#3").click(function() {
  var chart_labels_year = [<?php while($row = mysqli_fetch_array($result7)){echo "['".$row["appName"]."'],";} ?>];
  var push_dataset_year = [<?php while($row = mysqli_fetch_array($result8)) {echo "['".$row["number"]."'],";} ?>];
   var data = forecast_chart.config.data;
   data.datasets[0].data = push_dataset_year;
   data.labels = chart_labels_year;
   forecast_chart.update();
})

var forecast_chart = new Chart(ctx, config);
$("#4").click(function() {
  var chart_labels_alltime = [<?php while($row = mysqli_fetch_array($result9)){echo "['".$row["appName"]."'],";} ?>];
  var push_dataset_alltime = [<?php while($row = mysqli_fetch_array($result10)) {echo "['".$row["number"]."'],";} ?>];
   var data = forecast_chart.config.data;
   data.datasets[0].data = push_dataset_alltime;
   data.labels = chart_labels_alltime;
   forecast_chart.update();
})

},
error: function(data) {
  console.log(data);
}
});
});

</script>


<!-- CHART:JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>



</body>
</html>
