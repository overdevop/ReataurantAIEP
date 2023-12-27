@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h3>Productos</h3>

            @if (Session::has('error'))
                <div class="alert alert-danger text-center">
                    {{ Session::get('error') }}
                </div>
            @endif

            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="col-12 mb-3 d-flex justify-content-end">
                <a href="{{ route('createProducto') }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Crear Producto
                </a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nombre de Producto</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>

                            <td>{{ $producto->nombreProducto }}</td>
                            <td>{{ $producto->precioProducto }}</td>
                            <td>{{ $producto->stockProducto }}</td>
                            <td>
                                <a href="{{ route('editMesa', $producto->id) }}">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                |
                                <a href="">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="d-flex justify-content-end">
                {{ $productos->links() }}
            </div>

        </div>
    </div>
@endsection
