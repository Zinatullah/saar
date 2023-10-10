var data = [];
var labels = [];
var check = [];

$(document).ready(function () {
  (function () {
    $.ajax({
      url: "graph/graph.php", // PHP file that retrieves the data
      type: "GET",
      dataType: "json",
      success: function (datas) {
        datas.forEach((element) => {
          // rates.push(element.rate);

          var temp_time = element.timestamp;
          temp_time = temp_time.split(" ");
          // console.log(temp_time[0])

          labels.push(temp_time[0]);
          data.push(parseInt(element.rate))
        });
        console.log(labels);
        
        
        (() => {
          ("use strict");
          // Graphs
          const ctx = document.getElementById("myChart");
          // eslint-disable-next-line no-unused-vars

          const myChart = new Chart(ctx, {
            type: "line",
            data: {
              labels,
              datasets: [
                {
                  data,
                  lineTension: 0,
                  backgroundColor: "transparent",
                  borderColor: "#007bff",
                  borderWidth: 4,
                  pointBackgroundColor: "#007bff",
                },
              ],
            },
            options: {
              plugins: {
                legend: {
                  display: true,
                },
                tooltip: {
                  boxPadding: 3,
                },
              },
            },
          });
        })();
      },
      error: function () {
        console.log("Error occurred while retrieving data.");
      },
    });
  })();
});
