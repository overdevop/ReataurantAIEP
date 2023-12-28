@extends('layouts.plantilla')

@section('contenido')
    <div class="row">
        <div class="col-12 m-3">
            <h3>
                Eliminar Mesa # {{ $mesa->numeroMesa }}
            </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('eliminarMesa', $mesa->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="row">
                    <div class="col-8">
                        <p>
                            ¿Estás seguro de que deseas eliminar la mesa número {{ $mesa->numeroMesa }}?
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <button type="submit" class="btn btn-danger form-control mt-2">Eliminar Mesa</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
