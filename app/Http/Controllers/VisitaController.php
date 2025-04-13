<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $visitas = DB::table('visitas')
            ->join('mascotas','visitas.mascota_id','=','mascotas.id')
            ->select('visitas.*','mascotas.nombre as nombre_mascota')
            ->paginate(10);
        return view('visita.index',['visitas'=>$visitas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $mascotas = DB::table('mascotas')
            ->orderBy('id')
            ->get();
        return view('visita.new', ['mascotas' => $mascotas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $visita = New Visita();
        $visita->mascota_id = $request->codeMascota;
        $visita->fecha_visita = $request->fecha;
        $visita->motivo = $request->motivo;
        $visita->tratamiento = $request->tratamiento;

        $visita->save();

        $visitas = DB::table('visitas')
            ->join('mascotas','visitas.mascota_id','=','mascotas.id')
            ->select('visitas.*','mascotas.nombre as nombre_mascota')
            ->paginate(10);
        return view('visita.index',['visitas'=>$visitas]);
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
