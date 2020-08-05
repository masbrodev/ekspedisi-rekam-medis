    <?php 
    $eks = $this->Admin_model->grafik('tbl_ekspedisi')->num_rows();
    $pasien = $this->Admin_model->grafik('tbl_pasien')->num_rows();
    
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ekspedisi',     <?=$eks?>],
          ['Pasien',      <?=$pasien?>]
        ]);

        var options = {
          title: 'EKSPEDISI REKAM MEDIS',
          pieHole: 0.2,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 1000px; height: 500px;"></div>
  </body>
