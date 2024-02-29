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
        return view('chollos.index', ['chollos'=>$chollos]);
    }


    /**
     * Mostrar un chollo por id
     */
    public function show($id){
        $chollo = Chollo::find($id);
        $data['chollos'] = $chollo;
        return view('chollo.show', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chollo.form');
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
        $chollo->disponible = $request->disponible;
        //hay que poner el id o no??
    }

    /**
     * Display the specified resource.
     */
    /*public function show(Chollo $chollo)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chollo = Chollo::find($id);
        return view('chollo.form', array('chollo' => $chollo));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $chollo = Chollo::find($id);

        $chollo->titulo = $request->titulo;
        $chollo->descripcion = $request->descripcion;
        $chollo->url = $request->descripcion;
        $chollo->categoria = $request->categoria;
        $chollo->puntuacion = $request->puntuacion;
        $chollo->precio = $request->precio;
        $chollo->precio_descuento = $request->precio_descuento;
        $chollo->disponible = $request->disponible;

        return redirect()->route('chollo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chollo = Chollo::find($id);
        $chollo->delete();
        return redirect()->route('chollo.index');
    }
}
