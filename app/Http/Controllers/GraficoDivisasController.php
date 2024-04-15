<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TipoCambioHistorico;

class GraficoDivisasController extends Controller
{
    //
     public function index()
    {
        //
        
        $datos1 = DB::table('reservasinter')->orderBy('fecha')->get();
        $reservas[] = ['fecha','reserva', 'fondo', 'total'];
          foreach($datos1 as $key => $value) {
                $fecha[] = $value->fecha;
                $reserva[] = $value->bcv;
                $fondo[] = $value->fiem;
                $total[] = $value->total;
         }
         
        return view('/cambiohistorico/graficodivisas', compact('fecha', 'reserva', 'fondo', 'total'));

    }
}
