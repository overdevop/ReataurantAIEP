<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use Illuminate\Http\Request;

class ComandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $comandas = Comanda::Paginate(10);
        return view('comandas.index', compact('comandas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('comandas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        if ($request->idMesa == null || $request->estadoComanda == null || $request->totalComanda == null) {
            return redirect()->route('viewComandas')->with('error', 'No se pudo crear la comanda, completa todos los datos');
        }



        $nroComanda = rand(100, 99999);
        $comanda = new Comanda();
        $comanda->numeroComanda = $nroComanda;
        $comanda->idMesa = $request->idMesa;
        $comanda->estadoComanda = $request->estadoComanda;
        $comanda->totalComanda = $request->totalComanda;
        $comanda->save();

        return redirect()->route('viewComandas')->with('success', 'Producto creado correctamente', compact('nroComanda'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comanda $comanda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comanda $comanda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comanda $comanda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comanda $comanda)
    {
        //
    }
}
