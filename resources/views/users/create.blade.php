@extends('layouts.plantilla')

@section('contenido')
    <div class="col-12 m3">

        <h3>Crear usuario</h3>
        <form action="{{ route('storeUser') }}" method="POST" class="">
            @csrf
            <div class="row">
                <div class="col-4">
                    <input type="text" name="nombre" placeholder="Nombre de Usuario" class="form-control" required>

                </div>
                <div class="col-4">
                    <input type="email" name="email" placeholder="Ingresa un E-Mail" class="form-control" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-4">
                    <input type="password" name="password" placeholder="Ingresa una contraseña" class="form-control"
                        required>
                </div>
                <div class="col-4">
                    <select name="idRol" id="idRol" class="form-control select">
                        <option>Selecciona un rol</option>
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->nombreRol }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <button type="submit" class="btn btn-primary form-control mt-2">Crear usuario</button>

                </div>
            </div>
        </form>
    </div>
@endsection
