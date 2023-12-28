<?php

namespace App\Http\Controllers;

use App\Models\Comanda;
use App\Models\Mesa;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $productos = Producto::all();
        $mesas = Mesa::where('estadoMesa', 'Disponible')->get();
        return view('comandas.create', compact('productos', 'mesas'));
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

        DB::transaction(function () use ($request) {


            $comanda = Comanda::create([
                $nroComanda = rand(100, 99999),

                'numeroComanda' => $nroComanda,
                'idMesa' => $request->idMesa,
                'estadoComanda' => 'Pendiente',
                'totalComanda' => $request->totalComanda,
            ]);

            foreach ($request->idProducto as $key => $value) {
                $comanda->detalleComanda()->attach($value, ['cantidad' => $request->cantidad[$key]]);
            }
        });

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
