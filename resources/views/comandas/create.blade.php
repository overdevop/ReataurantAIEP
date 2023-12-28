@extends('layouts.plantilla')

@section('contenido')
    <h3>Nueva comanda</h3>


    <div class="container mt-4">
        <form action="{{ route('storeComanda') }}" method="POST">
            @csrf

            <!-- Campos de la comanda -->
            <!-- ... -->
            <div class="row">
                <div class="col-3   ">
                    <h4>Selecciona una Mesa</h4>
                </div>
                <div class="col-4">
                    <select name="numeroMesa" id="" class="form-control mb-1">
                        <option value="">Selecciona una mesa</option>
                        @foreach ($mesas as $mesa)
                            <option value="{{ $mesa->idMesa }}">{{ $mesa->numeroMesa }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- Detalles de la comanda -->
            <div id="detalles">
                <div class="detalle row">
                    <select class="form-control select col-6 m-1    ">
                        <!-- Opciones del select con los productos de la tabla "productos" -->
                        <!-- ... -->
                        <option value="">Selecciona un producto</option>
                        @foreach ($productos as $producto)
                            <option id="{{ $producto->idProducto }}">{{ $producto->nombreProducto }} </option>
                        @endforeach
                    </select>
                    <input type="number" name="cantidadProducto" min="1" value="1"
                        class="form-control col-1 m-1">

                </div>
            </div>
            <button type="button" class="agregar-detalle form-control btn btn-primary col-2 m-1">
                Agregar detalle
            </button>

            <button type="submit" class="btn btn-primary">Guardar Comanda</button>
        </form>
    </div>

    <script>
        // Agregar evento al botón de agregar detalle
        document.querySelector('.agregar-detalle').addEventListener('click', function() {
            const detalle = document.querySelector('.detalle').cloneNode(true);
            detalle.querySelector('select').value = '';
            const detallesContainer = document.querySelector('#detalles');
            detallesContainer.insertBefore(detalle, detallesContainer.firstChild);
        });
    </script>
    <script>
        function calculateTotalLine(input) {
            const cantidad = input.value;
            const precio = parseFloat(input.parentNode.previousElementSibling.querySelector('input[name="precioProducto"]')
                .value);
            const totalLinea = cantidad * precio;
            input.parentNode.nextElementSibling.querySelector('input[name="totalLinea"]').value = totalLinea.toFixed(2);
        }
    </script>
@endsection
