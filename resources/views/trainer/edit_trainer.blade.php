

@extends('layouts.app')



@section('title', 'Trainers Update')

@section('content')

<!-- BreadCrumb -->

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../../">Home</a></li>
	    <li class="breadcrumb-item"><a href="../">Trainer</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Update Trainer</li>
	  </ol>
	</nav>

<!-- Titulo -->

<h3 class="mx-auto" style="width: 300px;">Actualizar entrenador</h3>

    <div class="mx-auto" style= "margin-top: 20px; width: 100px;">

<!-- Imagen Actual del Entrenador-->

	   <img style="height: 100px; width: 100px; " src="../../../storage/app/{{$trainer->avatar}}" class="rounded-circle mx-auto" alt="image">
	
	   </div>

     <!-- Formulario usando Laravel Collective con la clase model-->

     {!! Form::model($trainer, ['route' => ['trainer.update', $trainer], 'method' => 'PUT', 'files' => 'true']) !!}
          
         <div class="form-group">
          
          {!! Form::label('name', 'Nombre') !!}
          {!! Form::text('name', null, ['class' => 'form-control']) !!}

         </div>

          <div class="form-group">
          
          {!! Form::label('email', 'Email') !!}
          {!! Form::text('email', null,['class' => 'form-control', 'disabled' => 'disabled']) !!}

         </div>

         <div class="form-group">
          
          {!!  Form::label('subir-avatar', 'Avatar') !!}
          {!!  Form::file('subir-avatar') !!}

         </div>

         <div class="form-group">
          
          {!!  Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}

         </div>


    {!! Form::close() !!}


	
<!-- Formulario usando HTML solo tradicional -->

<!--

<form class="form-group" method="POST" action="../../trainer/" enctype="multipart/form-data">

	@method('PUT')
	@csrf

  <div class="form-group">


    <label class="control-label col-sm-2" for="name">Nombre</label>


        <div class="col-sm-10">


          <input type="text" class="form-control" value="" name="nombre" placeholder="Nombre de Entrenador">


        </div>
    </div>


      <div class="form-group">

        
        <label class="control-label col-sm-1" for="correo">Correo</label>

            <div class="col-sm-10"> 

              <input disabled="disabled" type="text" class="form-control" name="correo" placeholder="Ingrese Correo" value="">

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

          <button type="submit" class="btn btn-outline-info">Actualizar</button>


        </div>

</form>
-->
@endsection