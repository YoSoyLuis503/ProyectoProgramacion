<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo;

class TrabajoController extends Controller
{

    public function index()
    {
        $trabajos = Trabajo::all();

        return view('index', ['trabajos' => $trabajos]);
    }


    public function crearFormulario()
    {
        return view('index');
    }

    public function guardarTrabajo(Request $request)
{
    $trabajo = new Trabajo();
    $trabajo->titulo = $request->input('titulo');
    $trabajo->descripcion = $request->input('descripcion');
    $trabajo->save();

    return redirect()->route('index');
}

}
