@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="../../">Home</a></li>
    <li class="breadcrumb-item"><a href="../">Trainer</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create Trainer</li>
  </ol>
</nav>


<h2 style="margin: 10px;"> Cargar entrenador </h2>


<!-- Forma HTML actual de crear un formulario con Laravel Collective-->

      {!! Form::open(['route' => 'trainer.store', 'method' => 'POST', 'files' => 'true']) !!}
          
         <div class="form-group">
          
          {!!Form::label('Name', 'Nombre') !!}
          {!!Form::text('name', 'null')| !!}

         </div>
    
    

      {!! Form::close() !!}                                                                                           




<!-- Forma HTML tradicional de crear un formulario-->
	<!--

<form class="form-group" method="POST" action="../trainer" enctype="multipart/form-data">


	@csrf

  <div class="form-group">


    <label class="control-label col-sm-2" for="name">Nombre</label>


        <div class="col-sm-10">


          <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre">


        </div>
    </div>


      <div class="form-group">

        
        <label class="control-label col-sm-1" for="correo">Correo</label>

            <div class="col-sm-10"> 

              <input type="text" class="form-control" name="correo" placeholder="Ingrese Correo">

            </div>
      </div>

      <div class="form-group">

        
        <label class="control-label col-sm-1" for="avatar">Avatar</label>

            <div class="col-sm-10"> 

              <input type="text" class="form-control" name="avatar" placeholder="Link de la Imagen">

            </div>
      </div>

      <div class="form-group">

        
        <label class="control-label col-sm-2" for="subir-avatar">Subir Avatar</label>

        <div class="col-sm-10"> 

          <input type="file" name="subir-avatar">

        </div>
      </div>

  

  
      <div class="form-group"> 

        <div class="col-sm-offset-2 col-sm-1">

          <button type="submit" class="btn btn-primary">Guardar</button>


        </div>

</form>
-->

@endsection