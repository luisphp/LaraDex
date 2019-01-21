<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
	{
		public function prueba() 

		{
			return "Prueba de controlador";
	}

	public function saludo($nombre){
		return "Hola usuario ".$nombre;
	}
}
