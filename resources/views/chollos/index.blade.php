@extends('layouts.master')

@section('title', 'Listado de chollos')
@section('header', 'Administración de chollos')

@section('content')
    <div>
        @forelse($chollos as $chollo)
            {{ $chollo->titulo }}
            {{ $chollo->descripcion }}
            {{ $chollo->url }}
            {{ $chollo->categoria }}
            {{ $chollo->puntuacion }}
            {{ $chollo->precio }}
            {{ $chollo->precio_descuento }}
        @empty
            No hay chollos disponibles.
        @endforelse
    </div>
@endsection
