<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas', 'PeliculaController@index');
Route::get('/detalle/{id}', 'PeliculaController@detalle');

Route::resource('usuario','UsuarioController');
// Route::get('/mostrar-fecha',function(){
//     $titulo = "Estoy mostrando la fecha";
//     return view('mostrar-fecha',array(
//         'titulo' => $titulo
//     ));
// });


// Route::get('/pelicula/{titulo}/{year?}',function($titulo="No hay una pelicula seleccionada",$year=2021){
//     return view('pelicula',array(
//         'titulo' => $titulo,
//         'year' => $year
//     ));
// })->where(array(
//     'titulo' => '[a-zA-Z]+',
//     'year' => '[0-9]+'
// ));

// Route::get('/listado-peliculas',function(){
//     $titulo="Listado de peliculas";
//     $listado=array('Batman','Spiderman','Gran Torino');
//     return view('peliculas.listado')->with('titulo',$titulo)->with('listado')->with('listado',$listado);
// });

// Route::get('/pagina-generica',function(){
//     return view('pagina');
// });
