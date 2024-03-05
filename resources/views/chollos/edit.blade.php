@extends('layouts.master')

@section('title', 'Editar chollo')

@section('content')

    <div class="container">
        @isset($chollo)
            <div class="text-center mb-4">
                <h4 style="border-bottom: 2px solid #ccc; padding-bottom: 5px;">Editar un chollo</h4>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('update', ['id' => $chollo->id]) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Producto:</label>
                            <input type="text" class="form-control" name="titulo" value="{{ $chollo->titulo ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <input type="text" class="form-control" name="descripcion"
                                value="{{ $chollo->descripcion ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="url">URL:</label>
                            <input type="text" class="form-control" name="url" value="{{ $chollo->url ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría:</label>
                            <input type="text" class="form-control" name="categoria" value="{{ $chollo->categoria ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="puntuacion">Puntuación:</label>
                            <input type="text" class="form-control" name="puntuacion"
                                value="{{ $chollo->puntuacion ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="text" class="form-control" name="precio" value="{{ $chollo->precio ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="precio_descuento">Precio descuento:</label>
                            <input type="text" class="form-control" name="precio_descuento"
                                value="{{ $chollo->precio_descuento ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="disponible">Disponible:</label>
                            <input type="text" class="form-control" name="disponible"
                                value="{{ $chollo->disponible ?? '' }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        @else
            Error
        @endisset
    </div>

@endsection
