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

Route::get('/template1', function () {
    return view('template_sencillo_bootstrap');
});

Route::get('/template2', function () {
    return view('template_portafolio_bootstrap');
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


/*
Route::get('/usuario/{id}',function($id){
	return 'Hola usuario '.$id;
});

*/

//Para reestringir el funcionamiento de una ruta puedes usar el metodo ->where, por ejemplo para 

Route::get('/usuario/{id}',function($id){
	return 'Hola usuario '.$id;
})->where('id', '[0-9]+');

//Aca se esta especificando que el Id de esta ruta solo puede contener numeros
//Test Commit


//Nexo entre La ruta y el controlador.
//Este controlador basico esta en TestControllerPrueba en la carpeta App/Http/Controllers

Route::get('/prueba','TestController@prueba');

//Para pasar parametros, se hace de la siguiente forma
Route::get('/prueba/{nombre}','TestController@saludo');


//Para acceder a un controlador de tipo resource 
Route::resource('trainer','TrainerController');



//Ruta para prokemons
Route::resource('pokemons','PokemonController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
