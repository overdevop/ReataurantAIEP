@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12 m-3">
            <h3>
                Editar Mesa # {{ $mesa->numeroMesa }}
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('updateMesa', $mesa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-4">
                    <input type="text" id="numeroMesa" name="numeroMesa" value="{{ $mesa->numeroMesa }}"
                        class="form-control" disabled>
                </div>
                <div class="form-group col-4">
                    <label for="estado">Estado de la Mesa</label>
                    <select name="estadoMesa" id="estadoMesa" class="form-control">
                        <option value="Disponible" {{ $mesa->estadoMesa == 'Disponible' ? 'selected' : '' }}>Disponible
                        </option>
                        <option value="Ocupada" {{ $mesa->estadoMesa == 'Ocupada' ? 'selected' : '' }}>Ocupada</option>
                        <option value="Reservada" {{ $mesa->estadoMesa == 'Reservada' ? 'selected' : '' }}>Reservada
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary form-control mt-1 col-4">Guardar</button>
            </form>
        </div>
    </div>
@endsection
