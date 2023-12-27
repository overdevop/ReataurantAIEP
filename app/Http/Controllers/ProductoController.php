<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $productos = Producto::Paginate('10');
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        if ($request->nombreProducto == null || $request->precioProducto == null || $request->stockProducto == null) {
            return redirect()->route('viewProductos')->with('error', 'No se pudo crear el producto, completa todos los datos');
        }

        $producto = new Producto();
        $producto->nombreProducto = $request->nombreProducto;
        $producto->precioProducto = $request->precioProducto;
        $producto->stockProducto = $request->stockProducto;
        $producto->save();

        return redirect()->route('viewProductos')->with('success', 'Producto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
