<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoIpcamController extends Controller
{
    //
    public function index(){
    
        $datos1 = DB::table('indicegeneralpreciosconsumidoramc')->orderBy('fecha')->get();
        $reservas[] = ['fecha','mes', 'indice', 'variacion'];
        foreach($datos1 as $key => $value) {
            
                $year[] = $value->fecha;
                $mes[] = $value->mes;
                $indice[] = $value->indice;
                $variacion[] = $value->variacion;
               
        }
        
        return view('/cambiohistorico/graficoipcamc', compact('year', 'mes', 'indice', 'variacion'));
    }
}
