@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')

	<h1 align="center"> Lista de Entrenadores </h1>

	<br>
	<br>

	@if (count($trainers)=== 0)

	<h5 align="center">No se han añadido entrenadores</h5>

		@else

			<div class="row">


				@foreach($trainers as $entrenador)

			
			
				<div class="col-sm" align="center">
						<div class="card" style="width: 18rem;">

							  		<div class="card-body" align="center">
							  			<img src="/storage/images/{{Storage::url($entrenador->avatar)}}" class="card-img-top" alt="..." align="center">
								    	<h5 class="card-title" align="center">{{$entrenador->name}}</h5>
								    	<p class="card-text" align="center">{{$entrenador->email}}</p>
								    	<a href="../trainer/details/{{$entrenador->id}}" 
								    	class="btn btn-primary">Ver Perfil Completo</a>
							  		
							  		</div>

							</div>

				</div>



		
				@endforeach

		
			</div>

		@endif


@endsection



