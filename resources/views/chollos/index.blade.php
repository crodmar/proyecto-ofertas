@extends('layouts.master')

@section('title', 'Listado de chollos')
@section('header', 'Administración de chollos')

@section('content')
    <div>
        @forelse($chollos as $chollo)
            <div>
                Producto: {{ $chollo->titulo }}
                Descripción: {{ $chollo->descripcion }}
                URL: {{ $chollo->url }}
                {{ $chollo->categoria }}
                {{ $chollo->puntuacion }}
                {{ $chollo->precio }}
                {{ $chollo->precio_descuento }}
                {{ $chollo->disponible }}
                <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.avif') }}">
                <button>Ver</button>
                <button>Editar</button>
                <button>Eliminar</button>
                <br>
            </div>
        @empty
            No hay chollos disponibles.
        @endforelse
    </div>
@endsection
