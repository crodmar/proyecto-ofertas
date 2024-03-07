<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CholloController extends Controller
{
    public function index()
    {
        //Muestra todos los chollos
        $chollos = Chollo::all();
        return view('chollos.index', ['chollos' => $chollos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chollos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required'
        ], [
            'titulo.required' => 'El título es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'url.required' => 'La URL es obligatoria',
            'categoria.required' => 'La categoría es obligatoria',
            'puntuacion.required' => 'La puntuación es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio_descuento.required' => 'El precio con descuento es obligatorio'
        ]);

        //Convertir a boolean
        $disponible = $request->has('disponible');

        Chollo::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'url' => $request->url,
            'categoria' => $request->categoria,
            'puntuacion' => $request->puntuacion,
            'precio' => $request->precio,
            'precio_descuento' => $request->precio_descuento,
            'disponible' => $disponible
        ]);

        // Redirigir a la vista de listado de chollos
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $chollo = Chollo::find($id);
        return view('chollos.show', ['chollo' => $chollo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chollo = Chollo::find($id);
        return view('chollos.edit', array('chollo' => $chollo));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
            'categoria' => 'required',
            'puntuacion' => 'required',
            'precio' => 'required',
            'precio_descuento' => 'required'
        ], [
            'titulo.required' => 'El título es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'url.required' => 'La URL es obligatoria',
            'categoria.required' => 'La categoría es obligatoria',
            'puntuacion.required' => 'La puntuación es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio_descuento.required' => 'El precio con descuento es obligatorio'
        ]);

        //Buscar el chollo
        $chollo = Chollo::findOrFail($id);

        //Convertir a boolean
        $disponible = $request->has('disponible');

        $chollo->update([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'url' => $request->url,
            'categoria' => $request->categoria,
            'puntuacion' => $request->puntuacion,
            'precio' => $request->precio,
            'precio_descuento' => $request->precio_descuento,
            'disponible' => $disponible
        ]);
        //$chollo->update($request->all());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chollo = Chollo::find($id);
        $chollo->delete();
        return redirect('/');
    }
}
