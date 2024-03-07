@extends('layouts.master')

@section('title', 'Listado de chollos')

@section('content')
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.avif') }}" class="img-thumbnail"
                            alt="Imagen del chollo" style="max-height: 300px;">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title border-bottom pb-2">{{ $chollo->titulo }}</h5>
                        <p class="card-text"><b>Descripción:</b> {{ $chollo->descripcion }}</p>
                        <p class="card-text"><b>URL:</b> <a href="{{ $chollo->url }}">{{ $chollo->url }}</a></p>
                        <p class="card-text"><b>Categoría:</b> {{ $chollo->categoria }}</p>
                        <p class="card-text"><b>Puntuación:</b> {{ $chollo->puntuacion }}</p>
                        <p class="card-text"><b>Precio:</b> <del style="color: gray;">{{ $chollo->precio }} €</del></p>
                        <p class="card-text"><b>Precio con descuento:</b>
                            <span class="text-danger"><b>{{ $chollo->precio_descuento }} €</b>
                            <img src="{{ asset('img/fuego.gif') }}" class="img" style="max-height: 20px;"></span>
                        </p>
                        <p class="card-text"><b>Disponible:</b> {{ $chollo->disponible ? 'Sí' : 'No' }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
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
    @endsection
