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
    <title>IPCAMC </title>
  
    </head>
  
  <body>
   
    <p class="text-4xl ... text-center mt-3"> Índice Precios Consumidor Área Metropolitana de Caracas</p>
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
        var app = {};
        var app1 = {};
        // Initialize the echarts instance based on the prepared dom
       
        // var myChart = echarts.init(chartDom);
        var option;
        var option1;
  
        var myChart = echarts.init(document.getElementById('linechart'));
        var myChart1 = echarts.init(document.getElementById('linechart1'));
      
        var year = {!! json_encode($year) !!};
        var mes = {!! json_encode($mes) !!};
        var indice = {!! json_encode($indice) !!};
        var variacion = {!! json_encode($variacion) !!};
       
       
        console.log(year, mes, indice, variacion);
      // Specify the configuration items and data for the chart
        const posList = [
          'left',
          'right',
          'top',
          'bottom',
          'inside',
          'insideTop',
          'insideLeft',
          'insideRight',
          'insideBottom',
          'insideTopLeft',
          'insideTopRight',
          'insideBottomLeft',
          'insideBottomRight'
        ];
        app.configParameters = {
          rotate: {
            min: -90,
            max: 90
          },
          align: {
            options: {
              left: 'left',
              center: 'center',
              right: 'right'
            }
          },
          verticalAlign: {
            options: {
              top: 'top',
              middle: 'middle',
              bottom: 'bottom'
            }
          },
          position: {
            options: posList.reduce(function (map, pos) {
              map[pos] = pos;
              return map;
            }, {})
          },
          distance: {
            min: 0,
            max: 100
          }
        };
        app.config = {
          rotate: 90,
          align: 'left',
          verticalAlign: 'middle',
          position: 'insideBottom',
          distance: 15,
          onChange: function () {
            const labelOption = {
              rotate: app.config.rotate,
              align: app.config.align,
              //verticalAlign: app.config.verticalAlign,
              position: app.config.position,
              distance: app.config.distance
            };
            myChart.setOption({
              series: [
                {
                  label: labelOption
                },
                {
                  label: labelOption
                },
                {
                  label: labelOption
                },
                {
                  label: labelOption
                }
              ]
            });
          }
        };
        const labelOption = {
          show: true,
          position: app.config.position,
          distance: app.config.distance,
          align: app.config.align,
          //verticalAlign: app.config.verticalAlign,
          rotate: app.config.rotate,
          formatter: '{c}  {name|{a}}',
          fontSize: 16,
          rich: {
            name: {}
          }
        };
        option = {
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'shadow'
            }
          },
          legend: {
            data: ['year','variacion', 'indice']
          },
          toolbox: {
            show: true,
            orient: 'vertical',
            left: 'right',
            top: 'center',
            feature: {
              mark: { show: true },
              dataView: { show: true, readOnly: false },
              magicType: { show: true, type: ['line', 'bar', 'stack'] },
              restore: { show: true },
              saveAsImage: { show: true }
            }
          },
          xAxis: [
            {
              type: 'category',
              axisTick: { show: false },
              data: year
            }
          ],
          yAxis: [
            {
              type: 'value'
            }
          ],
          series: [
            {
              name: 'Indice',
              type: 'line',
              barGap: 0,
              //label: labelOption,
              emphasis: {
                focus: 'series'
              },
              //data: [320, 332, 301, 334, 390]
              data: indice
            },
          ]
        };
        
        // Specify the configuration items and data for the chart
        const posList1 = [
          'left',
          'right',
          'top',
          'bottom',
          'inside',
          'insideTop',
          'insideLeft',
          'insideRight',
          'insideBottom',
          'insideTopLeft',
          'insideTopRight',
          'insideBottomLeft',
          'insideBottomRight'
        ];
        app1.configParameters = {
          rotate: {
            min: -90,
            max: 90
          },
          align: {
            options: {
              left: 'left',
              center: 'center',
              right: 'right'
            }
          },
          verticalAlign: {
            options: {
              top: 'top',
              middle: 'middle',
              bottom: 'bottom'
            }
          },
          position: {
            options1: posList.reduce(function (map, pos1) {
              map[pos1] = pos1;
              return map;
            }, {})
          },
          distance: {
            min: 0,
            max: 100
          }
        };
        app1.config = {
          rotate: 90,
          align: 'left',
          verticalAlign: 'middle',
          position: 'insideBottom',
          distance: 15,
          onChange: function () {
            const labelOption1 = {
              rotate: app1.config.rotate,
              align: app1.config.align,
              //verticalAlign: app.config.verticalAlign,
              position: app1.config.position,
              distance: app1.config.distance
            };
            myChart1.setOption({
              series: [
                {
                  label: labelOption
                },
                {
                  label: labelOption
                },
                {
                  label: labelOption
                },
                {
                  label: labelOption
                }
              ]
            });
          }
        };
        const labelOption1 = {
          show: true,
          position: app1.config.position,
          distance: app1.config.distance,
          align: app1.config.align,
          //verticalAlign: app.config.verticalAlign,
          rotate: app1.config.rotate,
          formatter: '{c}  {name|{a}}',
          fontSize: 16,
          rich: {
            name: {}
          }
        };
        option1 = {
          tooltip: {
            trigger: 'axis',
            axisPointer: {
              type: 'shadow'
            }
          },
          legend: {
            data: ['year','variacion', 'indice']
          },
          toolbox: {
            show: true,
            orient: 'vertical',
            left: 'right',
            top: 'center',
            feature: {
              mark: { show: true },
              dataView: { show: true, readOnly: false },
              magicType: { show: true, type: ['line', 'bar', 'stack'] },
              restore: { show: true },
              saveAsImage: { show: true }
            }
          },
          xAxis: [
            {
              type: 'category',
              axisTick: { show: false },
              data: year
            }
          ],
          yAxis: [
            {
              type: 'value'
            }
          ],
          series: [
            
            {
              name: 'Variacion',
              type: 'line',
              //label: labelOption,
              emphasis: {
                focus: 'series'
              },
              //data: [220, 182, 191, 234, 290]
              data: variacion
            },
            
          ]
        };
        
        option && myChart.setOption(option);
        option1 && myChart1.setOption(option1);
      
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