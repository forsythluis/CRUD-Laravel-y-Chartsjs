<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoIndicePreciosConsumidorController extends Controller
{
    //
     public function index(){
    
        $datos1 = DB::table('indicenacionalpreciosconsumidor')->orderBy('Ano')->get();
        $reservas[] = ['Ano','Mes', 'Indice', 'Variacion'];
        foreach($datos1 as $key => $value) {
            
                $year[] = $value->Ano;
                $mes[] = $value->Mes;
                $indice[] = $value->Indice;
                $variacion[] = $value->Variacion;
                
        }
        return view('/cambiohistorico/graficoipcamc', compact('year', 'mes', 'indice', 'variacion'));
    }
}
