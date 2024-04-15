<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoPibController extends Controller
{
    //
    public function index()
    {
        //
        
        $datos1 = DB::table('pibconstanteycorriente1')->orderBy('fecha')->get();
        $reservas[] = ['fecha','pibconst', 'pibcorr'];
          foreach($datos1 as $key => $value) {
           
                $fecha[] = $value->fecha;
                $constante[] = $value->pibconst;
                $corriente[] = $value->pibcorr;
                $notas[] = $value->notas;
                
         }
         
         return view('/cambiohistorico/graficoPib', compact('fecha', 'constante', 'corriente', 'notas'));
    }
}
