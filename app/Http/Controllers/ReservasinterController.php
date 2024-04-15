<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasinterController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $datos = DB::table('reservasinter')->orderBy('fecha')->paginate(10);
        $datos1 = DB::table('reservasinter')->orderBy('fecha')->get();
        $reservas[] = ['fecha','reserva', 'fondo', 'total'];
          foreach($datos1 as $key => $value) {
           
                $fecha[] = $value->fecha;
                $reserva[] = $value->bcv;
                $fondo[] = $value->fiem;
                $total[] = $value->total;
                
         }
       
        return view('/cambiohistorico/reservasinter', compact('datos', 'fecha', 'reserva', 'fondo', 'total'));
    
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
