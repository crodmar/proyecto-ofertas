@extends('layouts.master')

@section('title', 'Inserción de chollos')
@section('header', 'Inserción de chollos')

@section('content')

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <label for="titulo">Producto:</label>
        <input type="text" name="titulo" value="{{ $chollo->titulo ?? '' }}"><br>
        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" value="{{ $chollo->descripcion ?? '' }}"><br>
        <label for="url">URL:</label>
        <input type="text" name="url" value="{{ $chollo->url ?? '' }}"><br>
        <label for="categoria">Categoría:</label>
        <input type="text" name="categoria" value="{{ $chollo->categoria ?? '' }}"><br>
        <label for="puntuacion">Puntuación:</label>
        <input type="text" name="puntuacion" value="{{ $chollo->puntuacion ?? '' }}"><br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="{{ $chollo->precio ?? '' }}"><br>
        <label for="precio_descuento">Precio descuento:</label>
        <input type="text" name="precio_descuento" value="{{ $chollo->precio_descuento ?? '' }}"><br>
        <label for="disponible">Disponible:</label>
        <input type="text" name="disponible" value="{{ $chollo->disponible ?? '' }}"><br>
        <input type="submit">
    </form>
@endsection
