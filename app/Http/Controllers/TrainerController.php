<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use Illuminate\Support\Str;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $trainers = Trainer::all();

        return view ('trainer.index', compact('trainers'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
                    $file = $request->file('subir-avatar')->store('public');;
                
                    
                  }


                  //Aqui si el correo ya esta registrado muestra el mensaje de error
                  //Laptop Samsung

                  try {

                    $trainer = new Trainer();
                  
                    $trainer->name = $request->input('nombre');
                    $trainer->email = $request->input('correo');
                    $trainer->avatar = $file;
                    $trainer->slug = Str::slug($trainer->name, '-');
                    $trainer->save();


                    return 'Saved';


             
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                return 'Duplicate Entry';
            }
        }

                  

                    

                    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // En el caso de que estes buscando por ID debes ingresar la siguiente linea
        // $variable = Trainer::find($id);

        $detalles = Trainer::where('slug', $slug)->first();;

        return view ('trainer.trainer_details', compact('detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        
        $detalles = Trainer::where('slug', $slug)->first();;

        return view ('trainer.edit_trainer', compact('detalles'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Trainer $trainer)
    {
        

                        if($request->hasFile('subir-avatar')){
                            $file = $request->file('subir-avatar')->store('public');
                            
                            
                          }else { $file = $trainer->avatar;}

                           

                            $trainer->fill(['name' => $request->input('nombre'),
                                            'avatar' => $file,
                                            'slug' => Str::slug($request->input('nombre'), '-'),
                                            'updated_at'=> time() 
                                            ]);

                            $trainer->save();

                            return 'Updated!';


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
