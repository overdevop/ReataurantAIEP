@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h3>Comandas</h3>

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
                <a href="{{ route('createComanda') }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Nueva Comanda
                </a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Numero de Comanda</th>
                        <th>Numero de Mesa</th>
                        <th>Estado</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comandas as $comanda)
                        <tr>

                            <td>{{ $comanda->numeroComanda }}</td>
                            <td>{{ $comanda->mesa->numeroMesa }}</td>
                            <td>{{ $comanda->estadoComanda }}</td>
                            <td>{{ $comanda->totalComanda }}</td>

                            <td>
                                {{-- <a href="{{ route('editMesa', $producto->id) }}"> --}}
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
                {{ $comandas->links() }}
            </div>

        </div>
    </div>
@endsection
