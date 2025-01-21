<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // crear query
        $query = Juego::query();
        $request->has('nombre');
        if($request->has('nombre')) {
            $query->where('nombre', 'like', '%'.$request->get('nombre').'%');
            
        }
        $juegos = $query->get();
        return view('juegos', ['juegos' => $juegos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearJuego');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // recupera todo los que a llegado con post y get
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string|required'
        ]);
        Juego::create($request->all());
        // redirecciona al index
        return redirect()->route('listaJuegos')->with('success', 'Juego creado');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $juego = Juego::findOrFail($id);
        return view('mostrarJuego', compact('juego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $juego = Juego::findOrFail($id);
        return view('editarjuego', compact('juego'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $juego = Juego::findOrFail($id);
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string|required'
        ]);
        $juego->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
