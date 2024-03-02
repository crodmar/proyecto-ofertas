@extends('layouts.master')

@section('title', 'Listado de chollos')
@section('header', 'Administración de chollos')

@section('content')
<a href="{{ route('create') }}">Crear chollo</a>
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
                <a href="{{ route('show', $chollo->id) }}">Ver</a>
                <a href="{{ route('edit', $chollo->id) }}">Editar</a>
                <button>Eliminar</button>
                <br>
            </div>
        @empty
            No hay chollos disponibles.
        @endforelse
    </div>
@endsection
