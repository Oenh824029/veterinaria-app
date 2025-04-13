<?php

namespace App\Http\Controllers;


use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $propietarios = DB::table('propietario')
            ->paginate(10);
        return view('propietario.index',['propietarios'=>$propietarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $propietarios = DB::table('propietario')
            ->orderBy('id')
            ->get();
        return view('propietario.new', ['propietarios' => $propietarios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $propietario = new Propietario();
        $propietario->nombre = $request->nombre;
        $propietario->apellido = $request->apellido;
        $propietario->direccion = $request->direccion;
        $propietario->telefono = $request->telefono;
        $propietario->email = $request->email;
        $propietario->save();

        $propietarios = Propietario::select('propietario.*')->paginate(10);
        return view('propietario.index',['propietarios'=>$propietarios]);

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
        $propietario = Propietario::find($id);

        $propietarios = DB::table('propietario')
            ->orderBy('id')
            ->get();
        return view('propietario.edit',['propietario'=>$propietario ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $propietario = Propietario::find($id);
        $propietario->nombre = $request->nombre;
        $propietario->apellido = $request->apellido;
        $propietario->direccion = $request->direccion;
        $propietario->telefono = $request->telefono;
        $propietario->email = $request->email;
        $propietario->save();

        $propietarios = Propietario::select('propietario.*')->paginate(10);
        return view('propietario.index',['propietarios'=>$propietarios]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $propietario = Propietario::find($id);
        $propietario->delete();

        $propietarios = DB::table('propietario')
            ->select('propietario.*')
            ->paginate(10);
        //return view('propietario.index',['propietarios'=>$propietarios]);
        return redirect()->route('propietario.index')->with('success', 'Propietario eliminado correctamente');
    }
}
