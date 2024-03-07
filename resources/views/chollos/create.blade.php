@extends('layouts.master')

@section('title', 'Crear chollo')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h4 style="border-bottom: 2px solid #ccc; padding-bottom: 5px;">Crear un chollo</h4>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Producto:</label>
                    <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
                    @error('titulo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">
                    @error('descripcion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">URL:</label>
                    <input type="text" class="form-control" name="url" value="{{ old('url') }}">
                    @error('url')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ old('categoria') }}">
                    @error('categoria')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="puntuacion">Puntuación:</label>
                    <input type="text" class="form-control" name="puntuacion" value="{{ old('puntuacion') }}">
                    @error('puntuacion')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="text" class="form-control" name="precio" value="{{ old('precio') }}">
                    @error('precio')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="precio_descuento">Precio con descuento:</label>
                    <input type="text" class="form-control" name="precio_descuento" value="{{ old('precio_descuento') }}">
                    @error('precio_descuento')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="disponible">Disponible:</label>
                    <input type="checkbox" name="disponible" value="1" {{ old('disponible') ? 'checked' : '' }}> Sí
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

