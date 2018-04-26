$(document).ready(function){
  $.ajax({
    url:"http//localhost/chartjs/api.php",
    method: "GET",
    success: function(data){
      console.log.(data);
      var appName = [];
      var number = [];
      for (var i in data){
        appName.push("App "+ data[i].appName);
        number.push(data[i].number);
      }
      var chartdata = {
        labels: App Name,
        datasets: [{
            label: '# of Pushes',
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            data: number
        }]
      };

      var ctx = $("forecast");

      var barGraph = new Chart(ctx,{
        type: 'horizontalBar',
        data: chartdata
      });

    },
    error: function(data){
      console.log.(data);
    }
  })
}
