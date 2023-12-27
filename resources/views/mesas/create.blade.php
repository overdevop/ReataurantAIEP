@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12">
            <h1>Crear mesa</h1>
            @if (Session::has('error'))
                <div class="alert alert-danger text-center">
                    {{ Session::get('error') }}
                </div>
            @endif
            <div class="col-8 mb-3 d-flex justify-content-end">
                <a href="{{ route('viewMesas') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-left"></i>
                    Volver</a>
            </div>
        </div>
        <div class="col-12">
            <form action="{{ route('storeMesa') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <input type="text" name="numeroMesa" placeholder="Numero de mesa" class="form-control" required>
                    </div>
                    <div class="col-4">
                        <select name="estadoMesa" id="estadoMesa" class="form-control">
                            <option value="">Selecciona un estado</option>
                            <option value="Disponible">Disponible</option>
                            <option value="Ocupada">Ocupada</option>
                            <option value="Reservada">Reservada</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <button type="submit" class="btn btn-primary form-control mt-2">Crear mesa</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
