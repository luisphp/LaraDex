@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')

	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="./">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Trainer</li>
	  </ol>
	</nav>

	<h1 style="margin-top: 20px" align="center"> Lista de Entrenadores </h1>


	@if (count($trainers)=== 0)

	<h5 style="margin-top: 20px" align="center">No se han añadido entrenadores</h5>

		@else

			<div  style="margin-top: 20px" class="row">


				@foreach($trainers as $entrenador)

			
			
				<div class="col-sm" style="margin: 20px" align="center">

						<div class="card text-center" style="width: 18rem;">

							  		<div class="card-body" align="center">


							  			<img style="height: 100px; width: 100px; margin: 20px" src="../storage/app/{{$entrenador->avatar}}" class="card-img-top rounded-circle" alt=".." align="center">
								    	<h5 class="card-title" align="center">{{$entrenador->name}}</h5>
								    	<p class="card-text" align="center">{{$entrenador->email}}</p>
								    	<a href="./trainer/{{$entrenador->slug}}" 
								    	class="btn btn-primary">Ver Detalles</a> 
								    	<a href="./trainer/{{$entrenador->slug}}/edit" 
								    	class="btn btn-outline-secondary">Editar</a>
							  		
							  		</div>
							</div>

				</div>



		
				@endforeach

		
			</div>

		@endif


@endsection



