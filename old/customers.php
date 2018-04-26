<?php
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$query = "
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'rbb|24'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Inforadio'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'ROCKLAND.fm'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'SWR Aktuell'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'SWR3'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'radio SAW'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Retro FM'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = '1A Webradio'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Kochblogradio'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'SCHWARZWALDRADIO'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'SWR4 BW'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'SWR1 RP'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Hit Radio N1'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Kulturradio'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Fritz'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'SWR1 BW'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Charivari 98.6'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Radio F 94.5'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Pirate Gong'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Gong 97.1'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Radio Teddy'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'BB RADIO'
UNION
SELECT appName, COUNT(*) AS pushes FROM Notification WHERE appName = 'Radio Gong'
";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>KPUSH.our_customers</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">


    <!-- COLUMN CHART -->
<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawTitleSubtitle);

    function drawTitleSubtitle() {
      var data = google.visualization.arrayToDataTable([
        ['app name', 'pushes'],
        <?php
          while($row = mysqli_fetch_array($result))
          {
            echo "['".$row["appName"]."', ".$row["pushes"]."],";
          }
         ?>
      ]);

      var materialOptions = {
        chart: {
          //title: '',
          //subtitle: ''
        },
        hAxis: {
          title: 'Total Population',
          minValue: 0,
        },
        vAxis: {
          //title: ''
        },
        animation:{
        duration: 1000,
        easing: 'out',
      },
        bars: 'horizontal'


      };


      var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
      materialChart.draw(data, materialOptions);
    }

    </script>

  </head>

  <body>

    <section class="jumbotron text-center" height="150px;">
           <div class="container1">
               <h1 class="jumbotron-heading">Push Notification Statistics</h1>
               <p class="lead text-muted">by</p>
               <img src="img/konsole_labs_logo_orange.jpg" width="239px" height="56px" alt="HALLO">
               <br><br>
               <a href="index.html">Home</a>
           </div>
    </section>

    <!-- Links zu den Charts -->

    <!-- ROW 1 -->
    <div class="container1 text-center">
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <p>Push notifications of all monitored customer apps in 2018:</p>
          </div>
          <div class="col-sm-4"></div>
        </div>
        <!-- ROW 2 -->
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div id="chart_div" style="width: 1400px; height: 800px;"></div>
          </div>
          <div class="col"></div>
        </div>

      </div>


  </body>
</html>
