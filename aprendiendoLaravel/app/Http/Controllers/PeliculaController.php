<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index(){
        $titulo="Listado de peliculas";
        return view('peliculas.index',[
            'titulo' => $titulo
        ]);
    }
    public function detalle(){
       echo "Detalle de la pelicula";
       die();
    }
}
