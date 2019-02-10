@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')

	<h1 align="center"> Lista de Entrenadores </h1>

	<br>
	<br>


<div class="row">

		@foreach($trainers as $entrenador)

	
	
		<div class="col-sm">
				<div class="card" style="width: 18rem;">

					  		<div class="card-body">
					  			<img src="{{$entrenador->avatar}}" class="card-img-top" alt="...">
						    	<h5 class="card-title">{{$entrenador->name}}</h5>
						    	<p class="card-text">{{$entrenador->email}}</p>
						    	<a href="../trainer/details.blade.php" 
						    	class="btn btn-primary">Ver Perfil Completo</a>
					  		
					  		</div>

					</div>

		</div>



		
		@endforeach
	</div>


@endsection



