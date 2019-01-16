<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/primerruta',function(){
	return 'Hola';
});

//se pueden especificar parametros para las rutas
//como por ejemplo:

Route::get('/name/{name}',function($name){
	return 'Hola '.$name ;
});

// se pueden especificar que los parametros pueden estar vacios 
//como por ejemplo:

Route::get('/name/{name}/last_name/{l_n?}',function($name, $l_n = null){
	return 'Hola '.$name. ' con el apellido '.$l_n ;
});

//se pueden colocar datos por defecto en lugar de null
//ejemplo:

Route::get('/name/{name}/last_name/{l_n?}',function($name, $l_n = 'salvaje'){
	return 'Hola '.$name. ' con el apellido '.$l_n ;
});

// otra forma de definir datos dinamicos se pueden definir rutas de la siguiente forma

Route::get('/usuario/{id}',function($id){
	return 'Hola usuario '.$id;
});

//Para reestringir el funcionamiento de una ruta puedes usar el metodo ->where, por ejemplo para 
