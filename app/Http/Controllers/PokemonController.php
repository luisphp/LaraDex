<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	/* En esta linea de codigo verificamos si el  */
       // $request->user()->authorizeRoles('user','admin');
    
        //$pokemons = Pokemon::all();

        return view ('pokemons.index');    }
}
