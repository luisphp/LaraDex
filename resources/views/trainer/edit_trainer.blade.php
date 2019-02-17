

@extends('layouts.app')



@section('title', 'Trainers Update')

@section('content')

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../../">Home</a></li>
	    <li class="breadcrumb-item"><a href="../">Trainer</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Update Trainer</li>
	  </ol>
	</nav>


<h3 class="mx-auto" style="width: 500px;">Actualizar entrenador</h3>

<div class="mx-auto" style="width: 300px; margin-top: 20px;">

	<img class="mx-auto"  >

	<img src="../../../storage/app/{{$detalles->avatar}}" class="rounded mx-auto" alt="image">
	
	</div>
	


<form class="form-group" method="POST" action="../../trainer/{{$detalles->slug}}" enctype="multipart/form-data">

	@method('PUT')
	@csrf

  <div class="form-group">


    <label class="control-label col-sm-2" for="name">Nombre</label>


        <div class="col-sm-10">


          <input type="text" class="form-control" value="{{$detalles->name}}" name="nombre" placeholder="Nombre de Entrenador">


        </div>
    </div>


      <div class="form-group">

        
        <label class="control-label col-sm-1" for="correo">Correo</label>

            <div class="col-sm-10"> 

              <input disabled="disabled" type="text" class="form-control" name="correo" placeholder="Ingrese Correo" value="{{$detalles->email}}">

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

@endsection