<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usando highcharts </title>
    <meta charset="utf-8" />
    
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
  
    
</head>
<body>
   <div id="grafica"></div>
    
    <script>
     $(function($){
         $('#grafica').highcharts({
             title:{text:'Nuestra primera gráfica'},
             xAxis:{categories:['2002','2004','2015']},
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             tooltip:{valueSuffix:'%'},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Java',data: [25,23, 21]}, 
             {name: 'C',data: [20,18, 19]}, 
             {type: 'column',name: 'C++',data: [15, 17,11]}, 
             {type: 'spline',name: 'C#',data: [0, 4, 4]},
             {name: 'Objective-C',data: [0,1, 1.5]}
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Usando highcharts </title>
    <meta charset="utf-8" />
    
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
  
    
</head>
<body>
   <div id="grafica"></div>
    
    <script>
     $(function($){
         $('#grafica').highcharts({
             title:{text:'Nuestra primera gráfica'},
             xAxis:{categories:['2002','2004','2015']},
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
             tooltip:{valueSuffix:'%'},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[{type: 'column',name: 'Java',data: [25,23, 21]}, 
             {name: 'C',data: [20,18, 19]}, 
             {type: 'column',name: 'C++',data: [15, 17,11]}, 
             {type: 'spline',name: 'C#',data: [0, 4, 4]},
             {name: 'Objective-C',data: [0,1, 1.5]}
           ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });
    </script>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico con HTML y Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Gráfico de ejemplo</h2>
    <canvas id="miGrafico" width="400" height="200"></canvas>

    <script>
        // Datos para el gráfico
        const data = {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
                label: 'Ventas',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Configuración del gráfico
        const config = {
            type: 'bar', // Cambia a 'line', 'pie', 'doughnut', etc. para otros tipos de gráficos
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Renderiza el gráfico
        const miGrafico = new Chart(
            document.getElementById('miGrafico'),
            config
        );
    </script>
</body>
</html>
