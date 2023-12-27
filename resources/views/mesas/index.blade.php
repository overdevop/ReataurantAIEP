@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h1>Mesas</h1>
            <div class="col-12 mb-3 d-flex justify-content-end">
                <a href="{{ route('createMesa') }}" class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-plus"></i> Crear mesa
                </a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Numero de mesa</th>
                        <th>Estado</th>
                        <th>Ultima Modificacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mesas as $mesa)
                        <tr>

                            <td>{{ $mesa->numeroMesa }}</td>
                            <td>{{ $mesa->estadoMesa }}</td>
                            <td>{{ $mesa->updated_at }}</td>
                            <td>
                                <a href="{{ route('editMesa', $mesa->id) }}"><i class="fa-solid fa-pen-to-square"></i></a> |
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="d-flex justify-content-end">
                {{ $mesas->links() }}
            </div>

        </div>
    </div>
@endsection
