<?php // MYSQL anbinden für Ticker
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
// Check connection
// if (!$connect) {
//  die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
$query = "SELECT appName,nMessage FROM Notification ORDER BY id DESC LIMIT 5";
$result = mysqli_query($connect, $query);
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



<!-- ###################################### NAVBAR ###################################### -->
<nav class="site-header sticky-top py-1 bg-dark">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block" href="index.php"><img src="img/homeicon.svg" alt="home" href="index.php" style="width: 25px; height:25px;"></img></a>
    <a class="py-2 d-none d-md-inline-block" href=""></a>
    <a class="py-2 d-none d-md-inline-block" href="worldwide.php">WORLDWIDE</a>
    <a class="py-2 d-none d-md-inline-block" href="countrys.html">COUNTRIES</a>
    <a class="py-2 d-none d-md-inline-block" href="enriched.php">ENRICHED</a>
    <a class="py-2 d-none d-md-inline-block" href="corrections.php">CORRECTIONS</a>
    <a class="py-2 d-none d-md-inline-block" href="customers.php">CUSTOMERS</a>
    <a class="py-2 d-none d-md-inline-block" href="apps.php">APPS</a>
  </div>
</nav>



<!-- ###################################### HEADER ###################################### -->
<div class="bg-light overflow-hidden p-3 p-md-5 m-md-3 text-center" style="height: 400px;">
  <div class="col-md-7 xl-3 mx-auto md-5"></div>
  <div class="col-md-7 xl-3 mx-auto my-5">
    <h3 class="headtitle display-3 font-weight-bold">PUSH NOTIFICATION MONITORING</h3>
    <p class="lead font-weight-normal">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
  </div>

</div> <!-- Header end -->



<!-- ######### TICKER SLIDE ######### -->

<div class="ticker-title">
  <p class="tickerheader display-4 font-weight-bold">&nbsp;&nbsp;&nbsp;+++ ticker +++</p>
</div>
<div class="ticker-container">
	<div class="ticker-text text-light font-weight-bold" style="font-size: 20px;">

        <?php
          while($row = mysqli_fetch_array($result))
          {
            echo "<font color='#ffce00'>".$row["appName"]."</font>";
            echo ": ".$row["nMessage"]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+++&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
          }
         ?>

	</div>
</div>



<!-- ###################################### ROW 1 ###################################### -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">

  <div class="main mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="green display-5 font-weight-normal">Worldwide</h2>
      <p class="lead">Most pushes of all monitored apps.</p>
      <a class="btn btn-outline-light" href="worldwide.php">View data</a>
    </div>
  </div>

  <div class="main mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="green display-5 font-weight-normal">Countrys</h2>
      <p class="lead">Most pushes of monitored apps by countrys.</p>
      <a class="btn btn-outline-light" href="countrys.html">View data</a>
    </div>
  </div>

  <div class="main mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="green display-5 font-weight-normal">Enriched</h2>
      <p class="lead">Most pushes of enriched notifications.</p>
      <a class="btn btn-outline-light" href="enriched.php">View data</a>
    </div>
  </div>

</div><!-- end row 1 -->



<!-- ###################################### ROW 2 ###################################### -->
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">

  <div class="main mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="green display-5 font-weight-normal">Corrections</h2>
      <p class="lead">Most corrections made.</p>
      <a class="btn btn-outline-light" href="corrections.php">View data</a>
    </div>
  </div>

  <div class="main mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="green display-5 font-weight-normal">Customers</h2>
      <p class="lead">Most pushes by our customers.</p>
      <a class="btn btn-outline-light" href="customers.php">View data</a>
    </div>
  </div>

  <div class="main mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-light overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="green display-5 font-weight-normal">Apps</h2>
      <p class="lead">List of all monitored apps.</p>
      <a class="btn btn-outline-light" href="apps.php">View data</a>
    </div>
  </div>

</div><!-- end row 2 -->




<!-- ###################################### FOOTER ###################################### -->
<div class="footer bg-dark">Copyright &#169; 2018. All Rights Reserved. |
<a href="http://www.konsole-labs.com"><strong>konsole-labs.com</strong></a>
</div>



<!-- ###################################### END OF CONTENT ###################################### -->



<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/ticker.js"></script>




</body>
</html>
