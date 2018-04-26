

$(document).ready(function(){
  $.ajax({
		success: function(data) {
			     console.log(data);
            // Label ausblenden
           Chart.defaults.global.legend.display = false;
           // Font colors
           Chart.defaults.global.defaultFontColor = '#000';

var chart_labels = [<?php while($row = mysqli_fetch_array($result1)){echo "'".$row["appName"]."',";} ?>];
var push_dataset = [<?php while($row = mysqli_fetch_array($result2)){echo "".$row["number"].",";} ?>];

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
 var push_dataset_week = [<?php while($row = mysqli_fetch_array($result4)) {echo "[".$row["number"]."],";} ?>];
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
  var push_dataset_year = [<?php while($row = mysqli_fetch_array($result8)) {echo "[".$row["number"]."],";} ?>];
   var data = forecast_chart.config.data;
   data.datasets[0].data = push_dataset_year;
   data.labels = chart_labels_year;
   forecast_chart.update();
})

var forecast_chart = new Chart(ctx, config);
$("#4").click(function() {
  var chart_labels_alltime = [<?php while($row = mysqli_fetch_array($result9)){echo "['".$row["appName"]."'],";} ?>];
  var push_dataset_alltime = [<?php while($row = mysqli_fetch_array($result10)) {echo "[".$row["number"]."],";} ?>];
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
