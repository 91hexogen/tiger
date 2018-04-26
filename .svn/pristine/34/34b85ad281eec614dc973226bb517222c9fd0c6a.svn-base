$( document ).ready(function() {

    // Label ausblenden
   Chart.defaults.global.legend.display = false;
   // Font colors
   Chart.defaults.global.defaultFontColor = '#000';


  var chart_labels = ['News', 'Politik', 'Sport', 'Unterhaltung', 'Geld', 'Lifestyle'];
  var push_dataset = ['16', '10', '12', '4', '4', '6'];
  var ctx = document.getElementById("forecast").getContext('2d');
  var config = {
      type: 'radar',
      data: {
          labels: chart_labels,
          datasets: [{
              label: "Pushes",
              data: push_dataset,
              backgroundColor: 'rgba(243, 183, 1, 0.4)',
              borderColor: 'rgba(243, 183, 1, 0.8)',
  					  pointBackgroundColor: 'rgba(243, 183, 1, 0.8)',
              pointRadius: 4
          }]
      },
      options: {
  				legend: {
  					position: 'top',
  				},
  				title: {
  					display: true,
  					text: ''
  				},
  				scale: {
  					ticks: {
  						beginAtZero: true,
              //ZAHLEN
              fontSize: 16,
  					},
            pointLabels: {
              //TEXT
              fontSize: 20,
  				}
  			}
      }
  };

  // past 24 hours
  var forecast_chart = new Chart(ctx, config);
  $("#0").click(function() {
      var data = forecast_chart.config.data;
      data.datasets[0].data = push_dataset;
      data.labels = chart_labels;
      forecast_chart.update();
  })
  // past week
  $("#1").click(function() {
      var chart_labels = ['News', 'Politik', 'Sport', 'Unterhaltung', 'Geld', 'Lifestyle'];
      var push_dataset = ['78', '61', '54', '51', '18', '24'];
      var data = forecast_chart.config.data;
      data.datasets[0].data = push_dataset;
      data.labels = chart_labels;
      forecast_chart.update();
  })
  // past month
  $("#2").click(function() {
      var chart_labels = ['News', 'Politik', 'Sport', 'Unterhaltung', 'Geld', 'Lifestyle'];
      var push_dataset = ['2745', '2025', '2068', '1745', '953', '745'];
      var data = forecast_chart.config.data;
      data.datasets[0].data = push_dataset;
      data.labels = chart_labels;
      forecast_chart.update();
  })
  // past year
  $("#3").click(function() {
      var chart_labels = ['News', 'Politik', 'Sport', 'Unterhaltung', 'Geld', 'Lifestyle'];
      var push_dataset = ['23245', '18125', '15018', '7732', '2241', '1914'];
      var data = forecast_chart.config.data;
      data.datasets[0].data = push_dataset;
      data.labels = chart_labels;
      forecast_chart.update();
  })
  // all time
  $("#4").click(function() {
      var chart_labels = ['News', 'Politik', 'Sport', 'Unterhaltung', 'Geld', 'Lifestyle'];
      var push_dataset = ['67245', '60425', '58118', '38232', '28241', '21314'];
      var data = forecast_chart.config.data;
      data.datasets[0].data = push_dataset;
      data.labels = chart_labels;
      forecast_chart.update();
  });

});
