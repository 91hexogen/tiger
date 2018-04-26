<?php
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$query = "SELECT COUNT(*) AS number FROM Notification WHERE appNamePackage LIKE 'de%'";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KPUSH.countrys.2018</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">

    <!-- ############ GEO CHART ############ -->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Pushes'],
          ['Germany', 9423],
          ['United States', 8492],
          ['Brazil', 5325],
          ['Canada', 2451],
          ['France', 7453],
          ['United Kingdom', 5532],
          ['Belgium', 1532],
          ['Netherlands', 2232],
          ['Austria', 1532],
          ['Switzerland', 4532],
          ['Spain', 3532],
        ]);

      /*function drawRegionsMap(){
        var data = google.visualization.arrayToDataTable([
            ['appnamepackage', 'Number'],
            <?php
              //while($row = mysqli_fetch_array($result))
              {
                //echo "['".$row["appNamePackage"]."', ".$row["number"]."],";
              }
             ?>
        ]);*/

        var options = {
          //title: 'Push notifications of all monitred apps by country:'
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
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

    <!-- ROW 1 -->

    <div class="container1 text-center">
      <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4"><p>Origin of all monitored apps in 2018:</p></div>
          <div class="col-sm-4"></div>
        </div>
        <!-- ROW 2 -->
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div id="regions_div" style="width: 1400px; height: 800px;"></div>
          </div>
          <div class="col"></div>
        </div>
      </div>
  </body>
</html>
