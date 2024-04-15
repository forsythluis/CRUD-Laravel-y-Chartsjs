<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoCambioHistorico;

class GraficoTipoCambioController extends Controller
{
    //
     public function index()
    {
        $grafico = TipoCambioHistorico::select('fecha','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre')->get();
        $divisas2[] = ['fecha','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        
        foreach($grafico as $key => $value) {
            $años[] = $value->fecha;
            $enero[] = $value->enero;
            $febrero[] = $value->febrero;
            $marzo[] = $value->marzo;
            $abril[] = $value->abril;
            $mayo[] = $value->mayo;
            $junio[] = $value->junio;
            $julio[] = $value->julio;
            $agosto[] = $value->agosto;
            $septiembre[] = $value->septiembre;
            $octubre[] = $value->octubre;
            $noviembre[] = $value->noviembre;
            $diciembre[] = $value->diciembre;
        }
         
       
        return view('/cambiohistorico/graficotipocambio', compact('años', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'));
         
    }
}