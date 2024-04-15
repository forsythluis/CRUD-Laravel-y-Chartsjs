<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoPreciosConsumidorController extends Controller
{
    //
    public function index(){
    
        $datos1 = DB::table('inpc')->orderBy('year')->get();
        $reservas[] = ['year','mes', 'indice', 'variacion'];
        foreach($datos1 as $key => $value) {
           
                $year[] = $value->year;
                $mes[] = $value->mes;
                $indice[] = $value->indice;
                $variacion[] = $value->variacion;
                
        }
       
        return view('/cambiohistorico/graficoipcamc', compact('year', 'mes', 'indice', 'variacion'));
    }
}
