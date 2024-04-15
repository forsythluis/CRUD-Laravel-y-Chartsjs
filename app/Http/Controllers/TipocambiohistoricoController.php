<?php

namespace App\Http\Controllers;

use App\Models\TipoCambioHistorico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Charts\UserChart;
use App\Charts\MonthlyUsersChart;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class TipocambiohistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        //
        
         $datos = DB::table('tipocambiohistorico')->orderBy('fecha')->paginate(20);
         $grafico = TipoCambioHistorico::select('fecha','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre')->get();
         $divisas[] = ['años','enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        
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
        
         return view('/cambiohistorico/divisas', compact('datos', 'años', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre',));
         
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
