<!-- ########## PHP - MYSQL einbinden ########## -->

<?php
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$query = "SELECT appName, count(*) AS number FROM Notification GROUP BY appName ORDER BY `number` DESC";
$result = mysqli_query($connect, $query);
?>

<!-- ########## HTML ########## -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>KPUSH.overview.2018</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">



<!-- ########## CHART ########## -->

<script type="text/javascript">

google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['appname', 'pushes'],
          <?php
            while($row = mysqli_fetch_array($result))
            {
              echo "['".$row["appName"]."', ".$row["number"]."],";
            }
           ?>
        ]);

        var options = {
          title: '',
          legend: { position: 'none' },
          chart: { title: '',
                   subtitle: '' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: '', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" },
          animation:{
            duration: 2000,
            easing: 'out',
            startup: true
          }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };

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
          <div class="col-sm-4">
            <h7> Was willst du sehen? Statistiken der letzten:</h7><br>
            <a href="">24h</a> | <a href="">7 Tage</a> | <a href="">30 Tage</a> | <a href="">Jahr</a> | <a href="">Aller Zeiten</a><br><br>
          </div>
          <div class="col-sm-4"></div>
        </div>

        <!-- ROW 2 -->
        <div class="row">
          <div class="col"></div>
          <div class="col">
            <div id="top_x_div" style="width: 1400px; height: 800px;"></div>
          </div>
          <div class="col"></div>
        </div>

      </div>

  </body>
</html>
