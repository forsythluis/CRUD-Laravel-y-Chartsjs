<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.tailwindcss.com"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap 5 (CSS y JS) -->
    @vite(['resources/js/app.js'])
    {{-- ChartStyle --}} 
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script type = "text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>PIB a Precios Constantes y Corrientes </title>
  
    </head>
  
  <body>
   
    <p class="text-4xl ... text-center mt-3"> PIB a Precios Constantes y Corrientes</p>
  </head>
  <body>
  
  <div class="container m-3 p-3">
     <button type="button" class="btn btn-info">
         <i class="bi bi-box-arrow-left"></i>
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
         </svg>
         <a href="{{route ('index')}}">Regresar</a>
      </button>
    </div> 
    
    <div id="linechart" style="width: 100%; height: 900px "></div>
    <div id="linechart1" style="width: 100%; height: 900px "></div>
    
    <script>
    
       //gráfico Inflación
        
       var myChart = echarts.init(document.getElementById('linechart'));
       var myChart1 = echarts.init(document.getElementById('linechart1'));   
      
       var fecha = {!! json_encode($fecha) !!};
       var constante = {!! json_encode($constante) !!};
       var corriente = {!! json_encode($corriente) !!};
       var notas = {!! json_encode($notas) !!};
      
       console.log(fecha,constante,corriente,notas);
       // Specify the configuration items and data for the chart
       var option = {
         title: {
          text: 'PIB a Precios Constantes'
         },
         tooltip: {},
         legend: {
           data: ['sales']
         },
         xAxis: {
           data: fecha
         },
         yAxis: {},
         series: [
           {
             name: 'constante',
             type: 'line',
             data: constante,
           },
         ]
       };
      
       var option1 = {
        title: {
          text: 'PIB a Precios Corrientes'
        },
        tooltip: {},
        legend: {
          data: ['sales']
        },
        xAxis: {
          data: fecha
        },
        yAxis: {},
        series: [
          {
            name: 'corriente',
            type: 'line',
            data: corriente,
          }
        ]
       };

       // Display the chart using the configuration items and data just specified.
       myChart.setOption(option);
       myChart1.setOption(option1);
      
      
     
    </script>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    -->
  </body>
</html>