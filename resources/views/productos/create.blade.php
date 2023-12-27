@extends('layouts.plantilla')

@section('contenido')
    <div class="col-12 m3">

        <h3>Crear Producto</h3>
        <form action="{{ route('storeProducto') }}" method="POST">
            @csrf
            @if (Session::has('error'))
                <div class="alert alert-danger text-center">
                    {{ Session::get('error') }}
                </div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-success text-center">
                    {{ Session::get('success') }}
                </div>
            @endif

            <div class="row">
                <div class="col-4">
                    <input type="text" name="nombreProducto" id="nombreProducto" placeholder="Nombre de Producto"
                        class="form-control" required>
                </div>
                <div class="col-4">
                    <input type="number" name="precioProducto" id="precioProducto" placeholder="ej: 10.000"
                        class="form-control" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <input type="number" name="stockProducto" id="stockProducto" placeholder="ej: 10" class="form-control"
                        required>
                </div>
                <div class="col-4">

                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <button type="submit" class="btn btn-primary form-control mt-2">Agregar Producto</button>

                </div>
            </div>
        </form>
    </div>
@endsection
