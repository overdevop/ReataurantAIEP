<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mesas = Mesa::paginate(10);
        return view('mesas.index', ['mesas' => $mesas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mesas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if ($request->estadoMesa == null || $request->estadoMesa == "" || $request->numeroMesa == null || $request->numeroMesa == "") {

            return redirect()->route('createMesa')->with('error', 'Debe seleccionar un estado para la mesa');
        }
        // Verificar duplicidad del número de mesa
        if (Mesa::where('numeroMesa', $request->numeroMesa)->exists()) {
            return redirect()->route('createMesa')->with('error', 'El número de mesa ya existe');
        }
        $mesa = new Mesa();
        $mesa->numeroMesa = $request->numeroMesa;
        $mesa->estadoMEsa = $request->estadoMesa;
        $mesa->save();

        return redirect()->route('viewMesas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesa $mesa)
    {
        //
        return view('mesas.edit', ['mesa' => $mesa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesa $mesa)
    {
        //
        $mesa->estadoMesa = $request->estadoMesa;
        $mesa->save();
        return redirect()->route('viewMesas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
    
        return redirect()->route('viewMesas')->with('success', 'Mesa eliminada correctamente');
    }
}
