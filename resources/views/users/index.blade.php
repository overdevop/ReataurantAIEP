@extends('layouts.plantilla')

@section('contenido')
    <h1>Usuarios</h1>
    <div class="col-12">

        <div class="col-12 mb-3">
            <a href="{{ route('createUser') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Crear usuario</a>
        </div>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nombre de usuario</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Fecha Creacion</th>
                <th>Acciones</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nombre }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->rol->nombreRol }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ $user->id }}"><i class="fa-solid fa-pen-to-square"></i></a> |
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </td>

                </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
@endsection
