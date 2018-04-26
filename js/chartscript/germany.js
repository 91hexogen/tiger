/* +++++ CHART ++++++ */

$(document).ready(function(){
  $.ajax({
		url: "php/germany.php",
		method: "GET",
		success: function(data) {
			     console.log(data);
            // Label ausblenden
           Chart.defaults.global.legend.display = false;
           // Font colors
           Chart.defaults.global.defaultFontColor = '#000';

            var chart_24h = [];
            var push_24h = [];

            for(var i in data) {
        			chart_24h.push(data[i].appName);
        			push_24h.push(data[i].number);
    			  }

          var ctx = document.getElementById("forecast").getContext('2d');
          var config = {
              type: 'horizontalBar',
              data: {
                  labels: chart_24h,
                  datasets: [{
                      label: "Pushes",
                      data: push_24h,
                      backgroundColor: [
                        'rgba(255,129,0,0.7)',
                        'rgba(255,154,0,0.7)',
                        'rgba(255,193,0,0.7)',
                        'rgba(255,219,0,0.7)',
                        'rgba(255,231,0,0.7)',
                        'rgba(255,129,0,0.7)',
                        'rgba(255,154,0,0.7)',
                        'rgba(255,193,0,0.7)',
                        'rgba(255,219,0,0.7)',
                        'rgba(255,231,0,0.7)'
                      ]
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

          // past 24 hours
          var forecast_chart = new Chart(ctx, config);
          $("#0").click(function() {
              var data = forecast_chart.config.data;
              data.datasets[0].data = push_24h;
              data.labels = chart_24h;
              forecast_chart.update();
          })

          // past week
          $("#1").click(function() {
            var data = forecast_chart.config.data;
            data.datasets[0].data = p7day;
            data.labels = c7day;
            forecast_chart.update();
          })

          // past month
          $("#2").click(function() {
              var chart_labels = [];
              var push_dataset = [];
              var data = forecast_chart.config.data;
              data.datasets[0].data = push_dataset;
              data.labels = chart_labels;
              forecast_chart.update();
          })

          // past year
          $("#3").click(function() {
              var chart_labels = [];
              var push_dataset = [];
              var data = forecast_chart.config.data;
              data.datasets[0].data = push_dataset;
              data.labels = chart_labels;
              forecast_chart.update();
          })

          // all time
          $("#4").click(function() {
              var chart_labels = [];
              var push_dataset = [];
              var data = forecast_chart.config.data;
              data.datasets[0].data = push_dataset;
              data.labels = chart_labels;
              forecast_chart.update();
          })

        },
    		error: function(data) {
    			console.log(data);
    		}
    	});
    });
