@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12 m-3">
            <h3>
                Eliminar Producto # {{ $producto->id }}
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('eliminarProducto', $producto->id) }}" method="POST" id="deleteForm">
                @csrf
                @method('DELETE')

                <div class="row">
                    <div class="col-8">
                        <p>
                            ¿Estás seguro de que deseas eliminar el producto "{{ $producto->nombreProducto }}"?
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <button type="button" class="btn btn-danger form-control mt-2" onclick="confirmarEliminar()">Eliminar Producto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function confirmarEliminar() {
            if (confirm('¿Estás seguro de que deseas eliminar este producto?')) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection

