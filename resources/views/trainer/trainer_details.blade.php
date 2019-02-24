@extends('layouts.app')



@section('title', 'Trainer Details')

@section('content')

<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="../">Home</a></li>
	    <li class="breadcrumb-item"><a href="./">Trainer</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Trainer Details</li>
	  </ol>
	</nav>

	<!-- En estas lineas de codigo verificamos si nos llega algun mensage de redireccionamiento-->
	<!-- En el caso de que estems haciendo CRUDs-->

	<h3 style="margin-top: 20px" align="center"> Detalles de Entrenador</h3>

	@if (session('status'))

			@if(session('status')=='¡Actualizacion Exitosa!')

			<div class="alert alert-success">

				{{ session('status') }}

			</div>

				@else

			<div class="alert alert-danger">

				{{ session('status') }}

			</div>

			@endif

			
		@endif


	<div class="col-sm" style="margin-top: 20px" align="center">

						<div class="card text-center" style="width: 18rem;">

							  		<div class="card-body" align="center">


							  			<img style="height: 100px; width: 100px; margin: 20px" src="../../storage/app/{{$detalles->avatar}}" class="card-img-top rounded-circle" alt=".." align="center">
								    	<h5 class="card-title" align="center">{{$detalles->name}}</h5>
								    	<p class="card-text" align="center">{{$detalles->email}}</p>
								    	<a href="./../trainer/{{$detalles->slug}}/edit" 
								    	class="btn btn-outline-secondary btn-sm">Editar</a>
								    	
								    
								    	
							  		
							  		</div>
							</div>

				</div>

	
			


		
			

@endsection