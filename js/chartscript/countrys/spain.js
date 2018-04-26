/* +++++ CHART ++++++ */

$(document).ready(function(){
  $.ajax({
		url: "php/countrys/spain.php",
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
              type: 'bar',
              data: {
                  labels: chart_24h,
                  datasets: [{
                      label: "Pushes",
                      data: push_24h,
                      backgroundColor: [
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)',
                        'rgba(255,0,180,0.2)'
                      ],
                      borderColor: [
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)',
                        'rgba(255,0,180,0.9)'
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
        
                            //ZAHLEN
                            fontSize: 16
                          }
                      }],
                      yAxes: [{
                        ticks: {
                            beginAtZero: true,
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
