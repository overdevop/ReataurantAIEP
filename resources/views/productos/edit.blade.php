@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12 m-3">
            <h3>
                Editar Producto # {{ $producto->id }}


            <div class="row">
                <div class="col-12">
                    <form action="{{ route('updateProducto', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-4">
                                <label for="nombreProducto">Nombre de Producto</label>
                                <input type="text" id="nombreProducto" name="nombreProducto" value="{{ $producto->nombreProducto }}"
                                    class="form-control" required>
                            </div>
                            <div class="col-4">
                                <label for="precioProducto">Precio</label>
                                <input type="number" id="precioProducto" name="precioProducto" value="{{ $producto->precioProducto }}"
                                    class="form-control" required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-4">
                                <label for="stockProducto">Stock</label>
                                <input type="number" id="stockProducto" name="stockProducto" value="{{ $producto->stockProducto }}"
                                    class="form-control" required>
                            </div>
                            <div class="col-4">
                                <!-- Puedes agregar más campos según sea necesario para tu formulario de edición -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <button type="submit" class="btn btn-primary form-control mt-2">Actualizar Producto</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </h3>
    </div>
</div>
@endsection

