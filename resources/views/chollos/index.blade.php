@extends('layouts.master')

@section('title', 'Listado de chollos')

@section('content')
<div class="container">
    <div class="text-center mb-3">
        <a href="{{ route('create') }}" class="btn btn-success">Crear chollo</a>
    </div>
    <div>
        @forelse($chollos as $chollo)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h5 class="card-title border-bottom pb-2">{{ $chollo->titulo }}</h5>
                            <p class="card-text"><b>Descripción:</b> {{ $chollo->descripcion }}</p>
                            <p class="card-text"><b>Precio con descuento:</b>
                                <span class="text-danger"><b>{{ $chollo->precio_descuento }} €</b></span>
                                <img src="{{ asset('img/fuego.gif') }}" class="img" style="max-height: 20px;"></p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.avif') }}" class="img-thumbnail" alt="Imagen del chollo" style="max-height: 300px;">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-left">
                    <form action="{{ route('show', $chollo->id) }}" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-info mr-2">Ver</button>
                    </form>

                    <form action="{{ route('edit', $chollo->id) }}" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-warning mr-2">Editar</button>
                    </form>

                    <form action="{{ route('destroy', $chollo->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="alert alert-warning">No hay chollos disponibles.</div>
        @endforelse
    </div>
</div>
@endsection
