<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraficoInflacionController extends Controller
{
    //
    
    public function index()
    {
        //
        
        $datos2 = DB::table('inflacionhistorica')->get();
        $divisas2[] = ['Ano','Inflacion'];
          foreach($datos2 as $key => $value) {
           
                $divisas2[++$key] = [$value->Ano, $value->Inflacion];
                
         }
         
        return view('/cambiohistorico/graficoinflacion', compact('divisas2'));
       
    }
}
