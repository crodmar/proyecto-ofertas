@extends('layouts.master')

@section('title', 'Listado de chollos')
@section('header', 'Administración de chollos')

@section('content')
    <div>
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
                <form action="{{ route('edit', $chollo->id) }}" method="GET">
                    <button type="submit">Editar</button>
                </form>

                <form action="{{ route('destroy', $chollo->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                <br>
            </div>

    </div>
@endsection
