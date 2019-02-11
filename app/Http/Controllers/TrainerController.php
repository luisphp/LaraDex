<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $trainers = Trainer::all();

        return view ('trainer.index', compact('trainers'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Mediante la utilizacion del este metodo $request->all(); podemo ver toda la informacion que enviamos.
        
        //return $request->all();


        //Mediante la utilizacion de este metodo podemos obtener solo 1 valor en especifico o mas de los que se envia desde el formulario

    
       // return 'Hola '.$request->input('nombre').' con el correo '.$request->input('correo');



            
                    

            


                  if($request->hasFile('subir-avatar')){
                    $file = $request->file('subir-avatar');
                    $name = sha1(time());
                    $file->store('images');
                    
                  }

                  $trainer = new Trainer();
                    $trainer->name = $request->input('nombre');
                    $trainer->email = $request->input('correo');
                    $trainer->avatar = $request->$name;
                    $trainer->save();

                    return 'Saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
