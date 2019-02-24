<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use Illuminate\Support\Str;
use App\Http\Requests\StoreTrainerRequest;

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
    public function store(StoreTrainerRequest $request)
    {
        //Mediante la utilizacion del este metodo $request->all(); podemo ver toda la informacion que enviamos.
        
        //return $request->all();


        //Mediante la utilizacion de este metodo podemos obtener solo 1 valor en especifico o mas de los que se envia desde el formulario

    
       // return 'Hola '.$request->input('nombre').' con el correo '.$request->input('correo');


        //Aqui se especifican las validaciones
        //Se debe especificar en la vista los mensajes


        /*

        Estas lineas de codigo se usan aqui (en el controlador) en el caso de que no uses un FormRequest
        (Recuerda que estos seguardan en el directorio App/Htpp/Request/)


        $validatedData = $request->validate(

            ['name' => 'required|max: 10',
             'email' => 'required|max:10',
             'avatar' => 'image'
            ]);

        */


                  if($request->hasFile('subir-avatar')){

                    $file = $request->file('subir-avatar')->store('public');
            
                  }else{

                    $file = '/public/default.jpg';
                  
                  }


                  //Aqui si el correo ya esta registrado muestra el mensaje de error
                  
                  try {

                    $trainer = new Trainer();
                  
                    $trainer->name = $request->input('name');
                    $trainer->email = $request->input('email');
                    $trainer->avatar = $file;
                    $trainer->slug = Str::slug($trainer->name, '-');
                    $trainer->save();


                    return redirect()->route('trainer.index')->with('status','Registro Exitoso!');
                    //return 'Saved';


             
        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                //return 'Duplicate Entry';

                return redirect()->route('trainer.index')->with('status','Correo Duplicado');
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
    public function edit(Trainer $trainer)
    {
        
        //En el caso de que no usar el implicit binding recuerda que arriba debes cambioar el Trainer $trainer
        //Por $slug o ID segun como lo necesites y luego usar la linea de abajo
        //$detalles = Trainer::where('slug', $slug)->first();;



        return view ('trainer.edit_trainer', compact('trainer'));

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

                           

                            $trainer->fill([

                                            'name' => $request->input('name'),
                                            'avatar' => $file,
                                            'slug' => Str::slug($request->input('name'), '-'),
                                            'updated_at'=> time() 
                                           
                                            ]);

                            $trainer->save();

                            
                            return redirect()->route('trainer.show',[$request->slug])->with('status', '¡Actualizacion Exitosa!');
                            //return 'Updated!';



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        /*
        Recuerda siempre verificar que es lo que esta llegando al controller usando...

        return $trainer;

        */

        $trainer->delete();

        return redirect()->route('trainer.index')->with('status','Entrenador Eliminado');



       // return 'Deleted';
    }
}
