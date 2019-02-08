@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')


<br>
<br>

<h1> Cargar entrenador </h1>
	
<br>


<form class="form-horizontal" method="POST" action="../trainer">

	@csrf

  <div class="form-group">

    <label class="control-label col-sm-2" for="name">Nombre</label>

    <div class="col-sm-10">


      <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre">


    </div>
  </div>


  <div class="form-group">
    
    <label class="control-label col-sm-2" for="correo">Correo</label>

    <div class="col-sm-10"> 

      <input type="text" class="form-control" name="correo" placeholder="Ingrese Correo">

    </div>
  </div>

  
  </div>

  <div class="form-group"> 

    <div class="col-sm-offset-2 col-sm-10">

      <button type="submit" class="btn btn-primary">Guardar</button>


    </div>
  </div>
</form>

@endsection



	




</body>

</html>