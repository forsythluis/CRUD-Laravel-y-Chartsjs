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
    
    <title>Tipo Cambio Histórico</title>
    
  </head>
  
  <body>
  
 
   
    <p class="text-4xl ... text-center mt-3"> Tipo Cambio Histórico</p>
    <div class="container m-3 p-3">
     <button type="button" class="btn btn-info">
         <i class="bi bi-box-arrow-left"></i>
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
         </svg>
         <a href="{{route ('index')}}">Regresar</a>
      </button>
    
      <table class="table table-bordered ">
        <thead>
          <tr>
            <th scope="col">Años</th>
            <th scope="col">Enero</th>
            <th scope="col">Febrero</th>
            <th scope="col">Marzo</th>
            <th scope="col">Abril</th>
            <th scope="col">Mayo</th>
            <th scope="col">Junio</th>
            <th scope="col">Julio</th>
            <th scope="col">Agosto</th>
            <th scope="col">Septiembre</th>
            <th scope="col">Octubre</th>
            <th scope="col">Noviembre</th>
            <th scope="col">Diciembre</th>
            <th scope="col">Notas</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $datos as $dato )
          <tr>
            <th scope="row">{{$dato->fecha}}</th>
            <td>{{$dato->enero}}</td>
            <td>{{$dato->febrero}}</td>
            <td>{{$dato->marzo}}</td>
            <td>{{$dato->abril}}</td>
            <td>{{$dato->mayo}}</td>
            <td>{{$dato->junio}}</td>
            <td>{{$dato->julio}}</td>
            <td>{{$dato->agosto}}</td>
            <td>{{$dato->septiembre}}</td>
            <td>{{$dato->octubre}}</td>
            <td>{{$dato->noviembre}}</td>
            <td>{{$dato->diciembre}}</td>
            <td>{{$dato->notas}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>   
    
    </div>
   
    
    <div class="flex justify-center ...">
       {{$datos->links()}}
      
    </div>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    -->
    
  </body>
</html>