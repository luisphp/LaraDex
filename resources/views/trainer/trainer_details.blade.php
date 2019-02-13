@extends('layouts.app')



@section('title', 'Trainer Details')

@section('content')

	<h3 style="margin-top: 20px" align="center"> Detalles de Entrenador</h3>


	<div class="col-sm" style="margin-top: 20px" align="center">

						<div class="card text-center" style="width: 18rem;">

							  		<div class="card-body" align="center">


							  			<img style="height: 100px; width: 100px; margin: 20px" src="../../storage/app/{{$detalles->avatar}}" class="card-img-top rounded-circle" alt=".." align="center">
								    	<h5 class="card-title" align="center">{{$detalles->name}}</h5>
								    	<p class="card-text" align="center">{{$detalles->email}}</p>
								    
								    	
							  		
							  		</div>
							</div>

				</div>

	
			


		
			

@endsection