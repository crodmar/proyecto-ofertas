<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CholloController extends Controller
{
    public function index()
    {
        /*$chollos = Chollo::orderBy('titulo')->paginate(3);//si no pongo paginate no sale ninguno??
        //$chollos = Chollo::orderBy('titulo');
        return view('chollos.index', compact('chollos'));*/

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
        $chollo = new Chollo();
        $chollo->titulo = $request->titulo;
        $chollo->descripcion = $request->descripcion;
        $chollo->url = $request->descripcion;
        $chollo->categoria = $request->categoria;
        $chollo->puntuacion = $request->puntuacion;
        $chollo->precio = $request->precio;
        $chollo->precio_descuento = $request->precio_descuento;
        
        if($request->disponible == 'sí' || $request->disponible == 'Sí' ||
         $request->disponible == 'si' || $request->disponible == 'Si'){
            $chollo->disponible = true;
        } else if($request->disponible == 'no' || $request->disponible == 'No'){
            $chollo->disponible = false;
        }

        // Guardar el chollo en la base de datos
        $chollo->save();

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
        $chollo = Chollo::find($id);

        $chollo->titulo = $request->titulo;
        $chollo->descripcion = $request->descripcion;
        $chollo->url = $request->url;
        $chollo->categoria = $request->categoria;
        $chollo->puntuacion = $request->puntuacion;
        $chollo->precio = $request->precio;
        $chollo->precio_descuento = $request->precio_descuento;
        $chollo->disponible = $request->disponible;

        $chollo->save();

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
