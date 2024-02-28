<?php

namespace App\Http\Controllers;

use App\Models\Chollo;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CholloController extends Controller
{
    public function index()
    {
        $chollos = Chollo::orderBy('titulo')->paginate(3);
        return view('chollos.index', compact('chollos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chollo $chollo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chollo $chollo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chollo $chollo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chollo $chollo)
    {
        //
    }
}
