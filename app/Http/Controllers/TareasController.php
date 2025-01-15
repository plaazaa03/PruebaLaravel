<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareasController extends Controller
{
    public function index() {
        $mensaje = 'Lectura de Mensajes';
        $mensajes = ['mensaje1', 'mensaje2', 'mensaje3'];
        return view('mistareas', ['aviso' => $mensaje, 'mensajes' => $mensajes] );
        //return view('mistareas', compact('aviso', 'mensajes')); (Es lo mismo que lo de arriba)
        
    }
}
