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
