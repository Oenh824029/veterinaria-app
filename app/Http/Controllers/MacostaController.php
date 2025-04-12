<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use Illuminate\Support\Facades\DB;

class MacostaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mascotas = DB::table('mascotas')
            ->join('propietario', 'mascotas.propietario_id','=','propietario.id')
            ->select('mascotas.*', 'propietario.nombre as nombre_propietario')
            ->paginate(10);
        return view('mascota.index',['mascotas'=>$mascotas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $propietarios = DB::table('propietario')
            ->orderBy('nombre')
            ->get();

        $mascotas = DB::table('mascotas')
            ->orderBy('nombre')
            ->get();

        return view('mascota.new',['propietarios'=>$propietarios, 'mascotas'=>$mascotas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;
        $mascota->especie = $request->especie;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->propietario_id = $request->codePropietario;
        $mascota->save();

        $mascotas = DB::table('mascotas')
            ->join('propietario', 'mascotas.propietario_id','=','propietario.id')
            ->select('mascotas.*', 'propietario.nombre as nombre_propietario')
            ->paginate(10);
        return view('mascota.index',['mascotas'=>$mascotas]);

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
        $mascota = Mascota::find($id);

        $propietarios = DB::table('propietario')
            ->orderBy('nombre')
            ->get();

        return view('mascota.edit',['mascota'=>$mascota, 'propietarios'=>$propietarios]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $mascota = Mascota::find($id);
        $mascota->nombre = $request->nombre;
        $mascota->especie = $request->especie;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->propietario_id = $request->codePropietario;
        $mascota->save();

        $mascotas = DB::table('mascotas')
            ->join('propietario', 'mascotas.propietario_id','=','propietario.id')
            ->select('mascotas.*', 'propietario.nombre as nombre_propietario')
            ->paginate(10);
        return view('mascota.index',['mascotas'=>$mascotas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $mascota = Mascota::find($id);
        $mascota->delete();

        $mascotas = DB::table('mascotas')
            ->join('propietario', 'mascotas.propietario_id','=','propietario.id')
            ->select('mascotas.*', 'propietario.nombre as nombre_propietario')
            ->paginate(10);
        return view('mascota.index',['mascotas'=>$mascotas]);
    }
}
