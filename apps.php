<?php // MYSQL anbinden
include('apps_querys.inc');
error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", "root", "notificationData");
$query1 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE '1A Webradio'";
$query2 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE '20 Minuten'";
$query3 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Abendschau'";
$query4 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Antenne Bayern'";
$query5 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Antenne Brandenburg'";
$query6 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'AOL'";
$query7 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ARDBuffet'";
$query8 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'BBC News'";
$query9 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'BB RADIO'";
$query10 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'BILD'";
$query11 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'boerseARD'";
$query12 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Brandenburg Aktuell'";
$query13 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'bundle'";
$query14 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Charivari 98.6'";
$query15 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'CNN'";
$query16 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Daily Mail Online'";
$query17 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'DASDING'";
$query18 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'DerWesten'";
$query19 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'DW'";
$query20 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'EL PAÍS'";
$query21 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ESPN'";
$query22 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'FAZ - Der Tag'";
$query23 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'FAZ.NET'";
$query24 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'FT'";
$query25 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'FOCUS Online'";
$query26 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Fox News'";
$query27 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'franceinfo'";
$query28 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Fritz'";
$query29 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Gong 97.1'";
$query30 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Guardian'";
$query31 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Hit Radio N1'";
$query32 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Hit Radio Ohr'";
$query33 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'hr-iNFO'";
$query34 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'hr2-kultur'";
$query35 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'hr3'";
$query36 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'HuffPost'";
$query37 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Inforadio'";
$query38 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'KaffeeOderTee'";
$query39 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Kochblogradio'";
$query40 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Kulturradio'";
$query41 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'LA Times'";
$query42 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Le Figaro'";
$query43 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Mirror'";
$query44 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'NBC NEWS'";
$query45 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'NDR HH'";
$query46 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'NDR NDS'";
$query47 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'News Republic'";
$query48 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Newsstand'";
$query49 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'NOS'";
$query50 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ntv'";
$query51 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'NYTimes'";
$query52 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ORF.at News'";
$query53 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Pirate Gong'";
$query54 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'presseportal'";
$query55 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Quartz'";
$query56 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'radioBerlin 88,8''";
$query57 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'radioeins'";
$query58 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Radio F 94.5'";
$query59 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Radio Gong";
$query60 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Rai News'";
$query61 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Radio Paloma'";
$query62 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'radio SAW'";
$query63 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Radio TEDDY'";
$query64 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'rbb|24'";
$query65 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Resi'";
$query66 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Retro FM'";
$query67 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'RIA Novosti'";
$query68 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ROCKLAND.fm'";
$query69 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'RT News'";
$query70 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SCHWARZWALDRADIO'";
$query71 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Sky News'";
$query72 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SmartNews'";
$query73 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SPIEGEL ONLINE'";
$query74 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Squid'";
$query75 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'stern'";
$query76 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SWR1 RP'";
$query77 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SWR1 BW'";
$query78 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SWR3'";
$query79 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SWR4 BW'";
$query80 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SWR Aktuell'";
$query81 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'SZ.de'";
$query82 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Tagesschau'";
$query83 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'Tagesspiegel'";
$query84 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'The Times'";
$query85 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'USA TODAY'";
$query86 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'WP'";
$query87 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'watson'";
$query88 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'WELT News'";
$query89 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'WSJ'";
$query90 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'YOU FM'";
$query91 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ZDFheute'";
$query92 = "SELECT count(*) AS number FROM Notification WHERE appName LIKE 'ZEIT ONLINE'";


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
$result11 = mysqli_query($connect, $query11);
$result12 = mysqli_query($connect, $query12);
$result13 = mysqli_query($connect, $query13);
$result14 = mysqli_query($connect, $query14);
$result15 = mysqli_query($connect, $query15);
$result16 = mysqli_query($connect, $query16);
$result17 = mysqli_query($connect, $query17);
$result18 = mysqli_query($connect, $query18);
$result19 = mysqli_query($connect, $query19);
$result20 = mysqli_query($connect, $query20);
$result21 = mysqli_query($connect, $query21);
$result22 = mysqli_query($connect, $query22);
$result23 = mysqli_query($connect, $query23);
$result24 = mysqli_query($connect, $query24);
$result25 = mysqli_query($connect, $query25);
$result26 = mysqli_query($connect, $query26);
$result27 = mysqli_query($connect, $query27);
$result28 = mysqli_query($connect, $query28);
$result29 = mysqli_query($connect, $query29);
$result30 = mysqli_query($connect, $query30);
$result31 = mysqli_query($connect, $query31);
$result32 = mysqli_query($connect, $query32);
$result33 = mysqli_query($connect, $query33);
$result34 = mysqli_query($connect, $query34);
$result35 = mysqli_query($connect, $query35);
$result36 = mysqli_query($connect, $query36);
$result37 = mysqli_query($connect, $query37);
$result38 = mysqli_query($connect, $query38);
$result39 = mysqli_query($connect, $query39);
$result40 = mysqli_query($connect, $query40);
$result41 = mysqli_query($connect, $query41);
$result42 = mysqli_query($connect, $query42);
$result43 = mysqli_query($connect, $query43);
$result44 = mysqli_query($connect, $query44);
$result45 = mysqli_query($connect, $query45);
$result46 = mysqli_query($connect, $query46);
$result47 = mysqli_query($connect, $query47);
$result48 = mysqli_query($connect, $query48);
$result49 = mysqli_query($connect, $query49);
$result50 = mysqli_query($connect, $query50);
$result51 = mysqli_query($connect, $query51);
$result52 = mysqli_query($connect, $query52);
$result53 = mysqli_query($connect, $query53);
$result54 = mysqli_query($connect, $query54);
$result55 = mysqli_query($connect, $query55);
$result56 = mysqli_query($connect, $query56);
$result57 = mysqli_query($connect, $query57);
$result58 = mysqli_query($connect, $query58);
$result59 = mysqli_query($connect, $query59);
$result60 = mysqli_query($connect, $query60);
$result61 = mysqli_query($connect, $query61);
$result62 = mysqli_query($connect, $query62);
$result63 = mysqli_query($connect, $query63);
$result64 = mysqli_query($connect, $query64);
$result65 = mysqli_query($connect, $query65);
$result66 = mysqli_query($connect, $query66);
$result67 = mysqli_query($connect, $query67);
$result68 = mysqli_query($connect, $query68);
$result69 = mysqli_query($connect, $query69);
$result70 = mysqli_query($connect, $query70);
$result71 = mysqli_query($connect, $query71);
$result72 = mysqli_query($connect, $query72);
$result73 = mysqli_query($connect, $query73);
$result74 = mysqli_query($connect, $query74);
$result75 = mysqli_query($connect, $query75);
$result76 = mysqli_query($connect, $query76);
$result77 = mysqli_query($connect, $query77);
$result78 = mysqli_query($connect, $query78);
$result79 = mysqli_query($connect, $query79);
$result80 = mysqli_query($connect, $query80);
$result81 = mysqli_query($connect, $query81);
$result82 = mysqli_query($connect, $query82);
$result83 = mysqli_query($connect, $query83);
$result84 = mysqli_query($connect, $query84);
$result85 = mysqli_query($connect, $query85);
$result86 = mysqli_query($connect, $query86);
$result87 = mysqli_query($connect, $query87);
$result88 = mysqli_query($connect, $query88);
$result89 = mysqli_query($connect, $query89);
$result90 = mysqli_query($connect, $query90);
$result91 = mysqli_query($connect, $query91);
$result92 = mysqli_query($connect, $query92);
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

<!-- ################### NAVBAR ################### -->

<nav class="site-header sticky-top py-1 bg-dark">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2 d-none d-md-inline-block" href="index.php"><img src="img/homeicon.svg" alt="home" href="index.php" style="width: 25px; height:25px;"></img></a>
    <a class="py-2 d-none d-md-inline-block" href=""></a>
    <a class="py-2 d-none d-md-inline-block" href="worldwide.html">WORLDWIDE</a>
    <a class="py-2 d-none d-md-inline-block" href="countrys.html">COUNTRIES</a>
    <a class="py-2 d-none d-md-inline-block" href="enriched.html">ENRICHED</a>
    <a class="py-2 d-none d-md-inline-block" href="corrections.html">CORRECTIONS</a>
    <a class="py-2 d-none d-md-inline-block" href="customers.html">CUSTOMERS</a>
    <a class="py-2 d-none d-md-inline-block" href="apps.php">APPS</a>
  </div>
</nav>


<!-- ################### HEADER ################### -->
<div class="bg-light overflow-hidden p-3 p-md-5 m-md-3 text-center">
  <div class="col-md-7 xl-3 mx-auto my-5">
    <h3 class="headtitle display-3 font-weight-bold">PUSH NOTIFICATION MONITORING</h3>
  </div>
</div> <!-- Header end -->



<!-- ################### MAIN ROW ################### -->
<div class="d-md-flex flex-md-equal w-100 my-md-2">


<!-- ################### App List Column ################### -->
<div class="ex1 main col p-3 p-md-1-5 m-md-3 text-info">
    <h2 class="display-5 font-weight-normal text-warning">Overview</h2>
    <p class="lead font-weight-small text-light">Complete list of all monitored apps. Choose an App to view further details.</p>
    <form>
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
    </form>


    <table>

      <tr> <!-- *************** A *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">0-9</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#1awebradio" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" data-placement="bottom" data-offset="90" title="1A Webradio"><img src="img/applogos/1Awebradio.png"></a>
          <a class="logo" data-toggle="collapse" href="#20minuten" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" data-placement="bottom" data-offset="90" title="20 Minuten"><img src="img/applogos/20Minuten.png"></a>
        </td>
      </tr>

      <tr> <!-- *************** A *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">A</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#abendschau" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Abendschau"><img src="img/applogos/Abendschau.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#antennebayern" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Antenne Bayern"><img src="img/applogos/Antenne_Bayern.png"></a>
          <a class="logo"data-toggle="collapse" href="#antennebrandenburg" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Antenne Brandenburg"><img src="img/applogos/Antenne_Brandenburg.png"></a>
          <a class="logo"data-toggle="collapse" href="#aol" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="AOL"><img src="img/applogos/aol.png"></a>
          <a class="logo"data-toggle="collapse" href="#ardbuffet" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="ARD Buffet"><img src="img/applogos/ard_buffet.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** B *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">B</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#bbcnews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="BBC NEWS"><img src="img/applogos/bbc_news.png"></a>
          <a class="logo"data-toggle="collapse" href="#bbradio" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="BB Radio"><img src="img/applogos/bbradio.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#bild" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="BILD"><img src="img/applogos/Logo_BILD.svg"></a>
          <a class="logo"data-toggle="collapse" href="#boerseard" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="BoerseARD"><img src="img/applogos/boerseARD.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#brandenburgaktuell" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Brandenburg Aktuell"><img src="img/applogos/brandeburg_aktuell.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#bundle" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="bundle"><img src="img/applogos/bundle.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** C *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">C</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#charivari" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="1A Webradio"><img src="img/applogos/charivari.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#cnn" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="1A Webradio"><img src="img/applogos/cnn.png"></a>
        </td>
      </tr>

      <tr><!-- *************** D *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">D</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#dailymailonline" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Daily Mail Online"><img src="img/applogos/dailymailonline.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#dasding" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="DAS DING"><img src="img/applogos/DASDING.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#derwesten" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Der Westen"><img src="img/applogos/derwesten.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#deutschewelle" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Deutsche Welle"><img src="img/applogos/deutsche_welle.gif"></a>
        </td>
      </tr>

      <tr><!-- *************** E *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">E</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#elpais" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="EL PAIS"><img src="img/applogos/elpais.png"></a>
          <a class="logo"data-toggle="collapse" href="#espn" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="ESPN"><img src="img/applogos/espn.png"></a>
        </td>
      </tr>

      <tr><!-- *************** F *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">F</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#fazdertag" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="FAZ - Der Tag"><img src="img/applogos/faz_der_tag.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#faznet" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="FAZ.NET"><img src="img/applogos/faznet.jpeg"></a>
          <a class="logo"data-toggle="collapse" href="#financialtimes" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Financial Times"><img src="img/applogos/financial_times.png"></a>
          <a class="logo"data-toggle="collapse" href="#focusonline" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="FOCUS Online"><img src="img/applogos/focus_online.png"></a>
          <a class="logo"data-toggle="collapse" href="#foxnews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Fox News"><img src="img/applogos/foxnews.png"></a>
          <a class="logo"data-toggle="collapse" href="#franceinfo" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="franceinfo"><img src="img/applogos/franceinfo.png"></a>
          <a class="logo"data-toggle="collapse" href="#fritz" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Fritz"><img src="img/applogos/fritz.png"></a>
        </td>
      </tr>

      <tr><!-- *************** G *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">G</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#radiogong97" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio Gong"><img src="img/applogos/radio_gong_97.png"></a>
          <a class="logo"data-toggle="collapse" href="#guardian" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Guardian"><img src="img/applogos/guardian.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** H *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">H</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#hitradion1" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Hitradio N1"><img src="img/applogos/hitradio_n1.png"></a>
          <a class="logo"data-toggle="collapse" href="#hitradioohr" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Hitradio OHR"><img src="img/applogos/hitradio_ohr.png"></a>
          <a class="logo"data-toggle="collapse" href="#hrinfo" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="HR Info"><img src="img/applogos/hr_info.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#hr2kultur" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="hr2 kultur"><img src="img/applogos/hr2_kultur.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#hr3" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="hr3"><img src="img/applogos/hr3.png"></a>
          <a class="logo"data-toggle="collapse" href="#huffpost" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Huffington Post"><img src="img/applogos/huffpost.png"></a>
        </td>
      </tr>

      <tr><!-- *************** I *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">I</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#inforadio" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Inforadio"><img src="img/applogos/inforadio.png"></a>
        </td>
      </tr>

      <tr><!-- *************** K *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">K</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#kaffeeodertee" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="KaffeeOderTee"><img src="img/applogos/kaffeeodertee.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#kochblogradio" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Kochblogradio"><img src="img/applogos/kochblogradio.png"></a>
          <a class="logo"data-toggle="collapse" href="#kulturradio" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Kulturradio"><img src="img/applogos/kulturradio.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** L *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">L</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#latimes" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="LA Times"><img src="img/applogos/latimes.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#lefigaro" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="LE FIGARO"><img src="img/applogos/le_figaro.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** M *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">M</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#mirror" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Mirror"><img src="img/applogos/mirror.png"></a>
        </td>
      </tr>

      <tr><!-- *************** N *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">N</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#nbcnews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="NBC News"><img src="img/applogos/nbcnews.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#ndrhh" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="NDR HH"><img src="img/applogos/ndr_hh.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#ndrnds" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="NDR NDS"><img src="img/applogos/ndr_nds.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#newsrepublic" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="News Republic"><img src="img/applogos/newsrepublic.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#newsstand" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Newsstand"><img src="img/applogos/newsstand.png"></a>
          <a class="logo"data-toggle="collapse" href="#nos" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="NOS"><img src="img/applogos/nos.jpeg"></a>
          <a class="logo"data-toggle="collapse" href="#ntv" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="ntv"><img src="img/applogos/ntv.png"></a>
          <a class="logo"data-toggle="collapse" href="#nytimes" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="NY Times"><img src="img/applogos/nytimes.png"></a>
        </td>
      </tr>

      <tr><!-- *************** O *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">O</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#orf" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="ORF.at News"><img src="img/applogos/orf.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** P *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">P</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#pirategong" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Pirate Gong"><img src="img/applogos/pirate_gong.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#presseportal" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Presseportal"><img src="img/applogos/presseportal.png"></a>
        </td>
      </tr>

      <tr><!-- *************** Q *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">Q</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#quartz" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Quartz"><img src="img/applogos/quartz.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** R *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">R</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#radioberlin" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio Berlin"><img src="img/applogos/radioberlin.png"></a>
          <a class="logo"data-toggle="collapse" href="#radioeins" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio Eins"><img src="img/applogos/radioeins.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#radiof" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio F"><img src="img/applogos/radio_f.png"></a>
          <a class="logo"data-toggle="collapse" href="#radiogong" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio Gong"><img src="img/applogos/radio_gong.png"></a>
          <a class="logo"data-toggle="collapse" href="#rainews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="RAI News"><img src="img/applogos/rai.png"></a>
          <a class="logo"data-toggle="collapse" href="#radiopaloma" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio Paloma"><img src="img/applogos/radio_paloma.png"></a>
          <a class="logo"data-toggle="collapse" href="#radiosaw" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio SAW"><img src="img/applogos/radio_saw.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#radioteddy" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Radio Teddy"><img src="img/applogos/radio_teddy.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#rbb24" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="rbb24"><img src="img/applogos/rbb24.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#resi" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="RESI"><img src="img/applogos/resi.png"></a>
          <a class="logo"data-toggle="collapse" href="#retrofm" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Retro FM"><img src="img/applogos/retro.png"></a>
          <a class="logo"data-toggle="collapse" href="#ria" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="RIA Novosti"><img src="img/applogos/ria.png"></a>
          <a class="logo"data-toggle="collapse" href="#rockland" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Rockland"><img src="img/applogos/rockland.png"></a>
          <a class="logo"data-toggle="collapse" href="#rtnews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="RT News"><img src="img/applogos/rtnews.jpg"></a>

        </td>
      </tr>

      <tr><!-- *************** S *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">S</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#schwarzwald" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SCHWARZWALDRADIO"><img src="img/applogos/schwarzwaldradio.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#skynews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Sky News"><img src="img/applogos/skynews.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#smartnews" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Smart News"><img src="img/applogos/smart_news.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#spiegel" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Spiegel Online"><img src="img/applogos/spiegel_online.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#squid" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Squid"><img src="img/applogos/squid.png"></a>
          <a class="logo" data-toggle="collapse" href="#stern" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Stern"><img src="img/applogos/stern.png"></a>
          <a class="logo" data-toggle="collapse" href="#swr1rp" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SWR1 RP"><img src="img/applogos/swr1_rp.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#swr1bw" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SWR1 BW"><img src="img/applogos/swr1_bw.png"></a>
          <a class="logo" data-toggle="collapse" href="#swr3" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SWR3"><img src="img/applogos/swr3.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#swr4" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SWR4"><img src="img/applogos/swr4.png"></a>
          <a class="logo" data-toggle="collapse" href="#swraktuell" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SWR Aktuell"><img src="img/applogos/swr_aktuell.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#sz" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="SZ"><img src="img/applogos/sz.png"></a>
        </td>
      </tr>

      <tr><!-- *************** T *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">T</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#tagesschau" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Tagesschau"><img src="img/applogos/tagesschau.png"></a>
          <a class="logo" data-toggle="collapse" href="#tagesspiegel" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Tagesspiegel"><img src="img/applogos/tagesspiegel.jpg"></a>
          <a class="logo" data-toggle="collapse" href="#thetimes" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="The Times"><img src="img/applogos/thetimes.png"></a>
        </td>
      </tr>

      <tr><!-- *************** U *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">U</th>
      </tr>
      <tr>
        <td>
          <a class="logo" data-toggle="collapse" href="#usatoday" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="USA TODAY"><img src="img/applogos/usatoday.jpg"></a>
        </td>
      </tr>

      <tr><!-- *************** W *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">W</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#washpost" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Washington Post"><img src="img/applogos/washpost.jpeg"></a>
          <a class="logo"data-toggle="collapse" href="#watson" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="watson"><img src="img/applogos/watson.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#welt" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="WELT News"><img src="img/applogos/welt_news.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#wsj" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="Wall Street Journal"><img src="img/applogos/wsj.png"></a>
        </td>
      </tr>

      <tr><!-- *************** Y *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">Y</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#youfm" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="YOU FM"><img src="img/applogos/youfm.png"></a>
        </td>
      </tr>

      <tr><!-- *************** Z *************** -->
        <th class="display-5 font-weight-normal text-warning" style="font-size: 24px;">Z</th>
      </tr>
      <tr>
        <td>
          <a class="logo"data-toggle="collapse" href="#zdfheute" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="ZDF Heute"><img src="img/applogos/zdfheute.jpg"></a>
          <a class="logo"data-toggle="collapse" href="#zeit" aria-expanded="false" aria-controls="collapseExample" data-toggle="tooltip" title="ZEIT Online"><img src="img/applogos/zeitonline.jpg"></a>
        </td>
      </tr>

    </table>

  </div> <!-- Title Column end -->



<!-- ################### COLLAPSE CARD Column ################### -->
<div class="ex1 col-md-6 p-3 p-md-1-5 m-md-3 bg-light text-dark" id="main">

<!-- COLLAPSE CARDS -->
<div class="collapse" id="1awebradio">
          <div class="bg-dark card card-body">
            <div class="row">
              <div class="col">
                  <p class="appheader display-4 text-info font-weight-bold">1A Webradio</p><p class="text-warning">Konsole Labs Customer</p>
                  <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
                  <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                  <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result1)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
              </div>
            <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/1Awebradio.png" alt="germany"/></div></div>
            <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
            <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
        </div>
      </div>
    </div>
<div class="collapse" id="20minuten">
      <div class="bg-dark card card-body">
        <div class="row">
          <div class="col">
              <p class="appheader display-4 text-info font-weight-bold">20 Minuten</p><p class="text-warning"></p>
              <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
              <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
              <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result2)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
          </div>
        <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/20minuten.png" alt="germany"/></div></div>
        <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/switzerland.png" alt="switzerland"/></div></div>
        <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
    </div>
  </div>
</div>
<div class="collapse" id="abendschau">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Abendschau</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result3)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/Abendschau.jpg" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="antennebrandenburg">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Antenne Brandenburg</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result4)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/Antenne_Brandenburg.png" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="antennebayern">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Antenne Bayern</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result5)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/Antenne_Bayern.png" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="aol">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">AOL</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result6)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/aol.png" alt="aol"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="ardbuffet">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">ARD Buffet</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Lifestyle App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result7)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/ard_buffet.jpg" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="bbcnews">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">BBC News</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result8)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/bbc_news.png" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="bbradio">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">BB Radio</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result9)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/bbradio.jpg" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="bild">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">BILD</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result10)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/Logo_BILD.svg" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="boerseard">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">boerse ARD</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Stock Market App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result11)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/boerseARD.jpg" alt="germany"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="brandenburgaktuell">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Brandenburg Aktuell</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result12)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/brandenburg_aktuell.jpg" alt="bra_aktuell"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="bundle">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">bundle</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result13)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/bundle.jpg" alt="bundle"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="charivari">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Chari Vari 98.6</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result14)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/charivari.jpg" alt="charivari"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="germany"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="cnn">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">CNN</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result15)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/cnn.png" alt="cnn"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="dailymailonline">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Daily Mail Online</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result16)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/dailymailonline.jpg" alt="cnn"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="dasding">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">DAS DING</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result17)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/DASDING.jpg" alt="dasding"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>



<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="derwesten">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Der Westen</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result18)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/derwesten.jpg" alt="derwesten"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="deutschewelle">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Deutsche Welle</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result19)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/deutsche_welle.gif" alt="dw"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="elpais">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">EL PAIS</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result20)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/elpais.png" alt="elpais"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/spain.png" alt="spain"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="espn">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">ESPN</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Sport News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result21)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/espn.png" alt="espn"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="fazdertag">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">FAZ - Der Tag</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result22)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/faz_der_tag.jpg" alt="faz_der_tag"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="faznet">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">FAZ.NET</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result23)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/faznet.jpeg" alt="faz"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="financialtimes">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Financial Times</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result24)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/financial_times.png" alt="ft"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="focusonline">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">FOCUS Online</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result25)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/focus_online.png" alt="focus"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="foxnews">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Fox News</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result26)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/foxnews.png" alt="fox"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="franceinfo">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">franceinfo</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result27)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/franceinfo.png" alt="franceinfo"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/france.png" alt="fra"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="fritz">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Fritz</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result28)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/fritz.png" alt="fritz"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radiogong97">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio Gong 97.1</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result29)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radio_gong_97.png" alt="radiogong"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="guardian">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Guardian</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result30)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/guardian.jpg" alt="guardian"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="hitradion1">
<div class="bg-dark card card-body">
<div class="row">
  <div class="col">
<p class="appheader display-4 text-info font-weight-bold">Hit Radio N1</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result31)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/hitradio_n1.png" alt="hitradion1"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="hitradioohr">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Hit Radio Ohr</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result32)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/hitradio_ohr.png" alt="hitradionohr"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="hrinfo">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">hr iNFO</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result33)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/hr_info.jpg" alt="hrinfo"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="hr2kultur">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">hr2 kultur</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result34)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/hr2_kultur.jpg" alt="hr2kultur"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="hr3">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">hr3</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result35)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/hr3.png" alt="hr3"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="huffpost">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Huffington Post</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result36)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/huffpost.png" alt="huffpost"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="inforadio">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Inforadio</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result37)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/inforadio.png" alt="inforadio"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="kaffeeodertee">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">KaffeeOderTee</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Lifestyle App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result38)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/kaffeeodertee.jpg" alt="kaffeeodertee"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="kochblogradio">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Kochblogradio</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result39)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/kochblogradio.png" alt="kochblogradio"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="kulturradio">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Kulturradio</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result40)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/kulturradio.jpg" alt="kulturradio"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="latimes">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">LA Times</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result41)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/latimes.jpg" alt="latimes"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="lefigaro">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">LE FIGARO</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result42)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/le_figaro.jpg" alt="lefigaro"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/france.png" alt="fra"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="mirror">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
    <p class="appheader display-4 text-info font-weight-bold">Mirror</p><p class="text-warning"></p>
    <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
    <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
    <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result43)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/mirror.png" alt="mirror"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="nbcnews">
<div class="bg-dark card card-body">
  <div class="row">
    <div class="col">
        <p class="appheader display-4 text-info font-weight-bold">NCB News</p><p class="text-warning"></p>
        <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
        <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
        <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result44)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
    </div>
  <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/nbcnews.jpg" alt="nbc"/></div></div>
  <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
  <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="ndrhh">
    <div class="bg-dark card card-body">
      <div class="row">
        <div class="col">
            <p class="appheader display-4 text-info font-weight-bold">NDR HH</p><p class="text-warning"></p>
            <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
            <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
            <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result45)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
        </div>
      <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/ndr_hh.jpg" alt="ndrhh"/></div></div>
      <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
      <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
  </div>
</div>
</div>
<div class="collapse" id="ndrnds">
        <div class="bg-dark card card-body">
          <div class="row">
            <div class="col">
                <p class="appheader display-4 text-info font-weight-bold">NDR NDS</p><p class="text-warning"></p>
                <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
                <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result46)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
            </div>
          <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/ndr_nds.jpg" alt="ndrnds"/></div></div>
          <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
          <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
      </div>
    </div>
  </div>
<div class="collapse" id="newsrepublic">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">News Republic</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result47)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/newsrepublic.jpg" alt="newsrep"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/china.png" alt="china"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="newsstand">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Google Newsstand</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result48)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/newsstand.png" alt="newsstand"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="nos">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">NOS</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result49)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/nos.jpeg" alt="nos"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/holland.png" alt="ned"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="ntv">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">ntv</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result50)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/ntv.png" alt="ntv"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="nytimes">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">NY Times</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result51)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/nytimes.png" alt="nytimes"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="orf">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
  <p class="appheader display-4 text-info font-weight-bold">ORF News</p><p class="text-warning"></p>
  <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
  <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
  <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result52)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
  <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/orf.jpg" alt="orf"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/austria.png" alt="aut"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="pirategong">
<div class="bg-dark card card-body">
<div class="row">
  <div class="col">
      <p class="appheader display-4 text-info font-weight-bold">Pirate Gong</p><p class="text-warning"></p>
      <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
      <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
      <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result53)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
      <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
  </div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/pirate_gong.jpg" alt="pirategong"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="presseportal">
  <div class="bg-dark card card-body">
    <div class="row">
      <div class="col">
          <p class="appheader display-4 text-info font-weight-bold">presseportal</p><p class="text-warning"></p>
          <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
          <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
          <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result54)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
          <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
      </div>
    <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/presseportal.png" alt="presseportal"/></div></div>
    <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
    <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="quartz">
      <div class="bg-dark card card-body">
        <div class="row">
          <div class="col">
              <p class="appheader display-4 text-info font-weight-bold">Quartz</p><p class="text-warning"></p>
              <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
              <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
              <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result55)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
          </div>
        <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/quartz.jpg" alt="quartz"/></div></div>
        <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
        <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
    </div>
  </div>
</div>
<div class="collapse" id="radioberlin">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio Berlin 88.8</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result56)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radioberlin.png" alt="radioberlin"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radioeins">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio Eins</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result57)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radioeins.jpg" alt="radioberlin"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radiof">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio F 94.5</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result58)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radio_f.png" alt="radiof"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radiogong">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio Gong 96.3</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result59)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radio_gong.png" alt="radiogong"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="rainews">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Rai News</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result60)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/rai.png" alt="rainews"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/italy.png" alt="ita"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radiopaloma">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio Paloma</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result61)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radio_paloma.png" alt="radiopaloma"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radiosaw">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio SAW</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result62)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radio_saw.jpg" alt="radiosaw"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="radioteddy">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Radio Teddy</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result63)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/radio_teddy.jpg" alt="radioteddy"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="rbb24">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">RBB|24</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result64)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/rbb24.jpg" alt="rbb24"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="resi">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
    <p class="appheader display-4 text-info font-weight-bold">RESI</p><p class="text-warning"></p>
    <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
    <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
    <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result65)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/resi.png" alt="resi"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="retrofm">
<div class="bg-dark card card-body">
  <div class="row">
    <div class="col">
        <p class="appheader display-4 text-info font-weight-bold">Retro FM</p><p class="text-warning"></p>
        <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
        <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
        <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result66)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
        <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
    </div>
  <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/retro.png" alt="retrofm"/></div></div>
  <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/sweden.png" alt="swe"/></div></div>
  <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="ria">
    <div class="bg-dark card card-body">
      <div class="row">
        <div class="col">
            <p class="appheader display-4 text-info font-weight-bold">RIA Novosti</p><p class="text-warning"></p>
            <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
            <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
            <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result67)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
        </div>
      <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/ria.png" alt="ria"/></div></div>
      <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/russia.png" alt="rus"/></div></div>
      <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
  </div>
</div>
</div>
<div class="collapse" id="rockland">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Rockland FM</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result68)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/rockland.png" alt="rockland"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="rtnews">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">RT News</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result69)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/rtnews.png" alt="rtnews"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="schwarzwald">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Schwarzwaldradio</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result70)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/schwarzwaldradio.jpg" alt="schwarzwald"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="skynews">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Sky News</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result71)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/skynews.jpg" alt="skynews"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="smartnews">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Smart News</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result72)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/smart_news.jpg" alt="smartnews"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/japan.png" alt="jap"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="spiegel">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
    <p class="appheader display-4 text-info font-weight-bold">Spiegel Online</p><p class="text-warning"></p>
    <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
    <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
    <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result73)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/spiegel_online.jpg" alt="spiegel"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="squid">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Squid</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result74)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/squid.png" alt="squid"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="stern">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">Stern</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result75)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/stern.png" alt="stern"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="swr1rp">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">SWR 1 RP</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result76)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/swr1_rp.jpg" alt="swr1rp"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="swr1bw">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
<p class="appheader display-4 text-info font-weight-bold">SWR 1 BW</p><p class="text-warning"></p>
<p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
<!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
<p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result77)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
<p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/swr1_bw.png" alt="swr1bw"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>
<div class="collapse" id="swr3">
<div class="bg-dark card card-body">
<div class="row">
<div class="col">
    <p class="appheader display-4 text-info font-weight-bold">SWR 3</p><p class="text-warning"></p>
    <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
    <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
    <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result78)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
    <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
</div>
<div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/swr3.jpg" alt="swr3"/></div></div>
<div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
<!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
</div>
</div>
</div>


<!-- Collapse -->
<div class="collapse" id="swr4">
    <div class="bg-dark card card-body">
      <div class="row">
        <div class="col">
            <p class="appheader display-4 text-info font-weight-bold">SWR 4 BW</p><p class="text-warning"></p>
            <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
            <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
            <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result79)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
            <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
        </div>
      <div class="col-md-auto"><div class="text-center"><img class="card_logo" src="img/applogos/swr4.png" alt="swr4"/></div></div>
      <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
      <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
  </div>
</div>
</div>

<!-- Collapse -->
  <div class="collapse" id="swraktuell">
        <div class="bg-dark card card-body">
          <div class="row">
            <div class="col">
                <p class="appheader display-4 text-info font-weight-bold">SWR Aktuell</p><p class="text-warning"></p>
                <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result80)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
            </div>
          <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/swr_atkuell.jpg" alt="swraktuell"/></div></div>
          <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
          <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
      </div>
    </div>
</div>

<!-- Collapse -->
    <div class="collapse" id="sz">
          <div class="bg-dark card card-body">
            <div class="row">
              <div class="col">
                  <p class="appheader display-4 text-info font-weight-bold">SZ</p><p class="text-warning"></p>
                  <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                  <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                  <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result81)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
              </div>
            <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/sz.png.jpg" alt="sz"/></div></div>
            <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
            <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
        </div>
      </div>
    </div>

    <!-- Collapse -->
        <div class="collapse" id="tagesschau">
              <div class="bg-dark card card-body">
                <div class="row">
                  <div class="col">
                      <p class="appheader display-4 text-info font-weight-bold">Tagesschau</p><p class="text-warning"></p>
                      <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                      <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                      <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result82)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                  </div>
                <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/tagesschau.png" alt="tagesschau"/></div></div>
                <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
                <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
            </div>
          </div>
        </div>

        <!-- Collapse -->
            <div class="collapse" id="tagesspiegel">
                  <div class="bg-dark card card-body">
                    <div class="row">
                      <div class="col">
                          <p class="appheader display-4 text-info font-weight-bold">Tagesspiegel</p><p class="text-warning"></p>
                          <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                          <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                          <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result83)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                      </div>
                    <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/tagesspiegel.jpg" alt="tagesspiegel"/></div></div>
                    <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
                    <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                </div>
              </div>
            </div>

            <!-- Collapse -->
                <div class="collapse" id="thetimes">
                      <div class="bg-dark card card-body">
                        <div class="row">
                          <div class="col">
                              <p class="appheader display-4 text-info font-weight-bold">Tagesspiegel</p><p class="text-warning"></p>
                              <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                              <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                              <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result84)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                          </div>
                        <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/tahetimes.png" alt="thetimes"/></div></div>
                        <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/uk.png" alt="uk"/></div></div>
                        <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                    </div>
                  </div>
                </div>

                <!-- Collapse -->
                    <div class="collapse" id="usatoday">
                          <div class="bg-dark card card-body">
                            <div class="row">
                              <div class="col">
                                  <p class="appheader display-4 text-info font-weight-bold">USA Today</p><p class="text-warning"></p>
                                  <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                  <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                  <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result85)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                              </div>
                            <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/usatoday.jpg" alt="usatoday"/></div></div>
                            <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
                            <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                        </div>
                      </div>
                    </div>

                    <!-- Collapse -->
                        <div class="collapse" id="washpost">
                              <div class="bg-dark card card-body">
                                <div class="row">
                                  <div class="col">
                                      <p class="appheader display-4 text-info font-weight-bold">Washington Post</p><p class="text-warning"></p>
                                      <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                      <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                      <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result86)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                  </div>
                                <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/washpost.jpeg" alt="washpost"/></div></div>
                                <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
                                <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                            </div>
                          </div>
                        </div>

                        <!-- Collapse -->
                            <div class="collapse" id="watson">
                                  <div class="bg-dark card card-body">
                                    <div class="row">
                                      <div class="col">
                                          <p class="appheader display-4 text-info font-weight-bold">watson</p><p class="text-warning"></p>
                                          <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                          <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                          <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result87)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                      </div>
                                    <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/watson.jpg" alt="watson"/></div></div>
                                    <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/swtizerland.png" alt="switzerland"/></div></div>
                                    <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                                </div>
                              </div>
                            </div>

                            <!-- Collapse -->
                                <div class="collapse" id="welt">
                                      <div class="bg-dark card card-body">
                                        <div class="row">
                                          <div class="col">
                                              <p class="appheader display-4 text-info font-weight-bold">WELT News</p><p class="text-warning"></p>
                                              <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                              <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                              <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result88)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                          </div>
                                        <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/welt_news.jpg" alt="welt"/></div></div>
                                        <div class="col col-lg-2"><div class="text-center"><img class="card_flag"src="img/countryflags/germany.png"alt="ger"/></div></div>
                                        <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                                    </div>
                                  </div>
                                </div>

                                <!-- Collapse -->
                                    <div class="collapse" id="wsj">
                                          <div class="bg-dark card card-body">
                                            <div class="row">
                                              <div class="col">
                                                  <p class="appheader display-4 text-info font-weight-bold">Wall Street Journal</p><p class="text-warning"></p>
                                                  <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                                  <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                                  <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result89)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                                  <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                              </div>
                                            <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/wsj.png" alt="wsj"/></div></div>
                                            <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/usa.png" alt="usa"/></div></div>
                                            <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Collapse -->
                                        <div class="collapse" id="youfm">
                                              <div class="bg-dark card card-body">
                                                <div class="row">
                                                  <div class="col">
                                                      <p class="appheader display-4 text-info font-weight-bold">YOU FM</p><p class="text-warning"></p>
                                                      <p class="xf text-light">Category:<span class="text-warning"> Radio App</span></p>
                                                      <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                                      <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result90)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                                      <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                                  </div>
                                                <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/youfm.png" alt="youfm"/></div></div>
                                                <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
                                                <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                                            </div>
                                          </div>
                                        </div>

                                        <!-- Collapse -->
                                            <div class="collapse" id="zdfheute">
                                                  <div class="bg-dark card card-body">
                                                    <div class="row">
                                                      <div class="col">
                                                          <p class="appheader display-4 text-info font-weight-bold">ZDF heute</p><p class="text-warning"></p>
                                                          <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                                          <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                                          <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result91)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                                          <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                                      </div>
                                                    <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/zdfheute.jpg" alt="zdfheute"/></div></div>
                                                    <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
                                                    <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                                                </div>
                                              </div>
                                            </div>

                                            <!-- Collapse -->
                                                <div class="collapse" id="zeit">
                                                      <div class="bg-dark card card-body">
                                                        <div class="row">
                                                          <div class="col">
                                                              <p class="appheader display-4 text-info font-weight-bold">ZEIT Online</p><p class="text-warning"></p>
                                                              <p class="xf text-light">Category:<span class="text-warning"> News App</span></p>
                                                              <!--<p class="xf text-light">Country: <span class="text-warning">Germany</span></p>-->
                                                              <p class="xf text-light">Notifications total: <?php while($row = mysqli_fetch_array($result92)){echo "<font color='#5cb85c'>".$row["number"]."</font>";} ?></p>
                                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp enriched:</p>
                                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp picture:</p>
                                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp video:</p>
                                                              <p class="text-light">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp audio:</p>
                                                          </div>
                                                        <div class="col-md-auto"><div class="text-center"><img class="card_logo"src="img/applogos/zeitonline.jpg" alt="zeit"/></div></div>
                                                        <div class="col col-lg-2"><div class="text-center"><img class="card_flag" src="img/countryflags/germany.png" alt="ger"/></div></div>
                                                        <!-- echo "<font color='#ffce00'>".$row["appName"]."</font>"; -->
                                                    </div>
                                                  </div>
                                                </div>

</div> <!-- Title Column end -->
</div> <!-- Main Row end -->


<!-- ################### FOOTER ################### -->
<div class="footer bg-dark">Copyright &#169; 2018. All Rights Reserved. |
<a href="http://www.konsole-labs.com"><strong>konsole-labs.com</strong></a></div>
<!-- END  OF CONTENT-->

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/buttonactive.js"></script>
<script type="text/javascript" src="js/sortTable.js"></script>
<script type="text/javascript" src="js/chartscript/apps.js"></script>
<!-- CHART:JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
</body>
</html>
