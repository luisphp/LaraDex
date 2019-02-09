@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')


<br>
<br>

<<<<<<< HEAD
<h1> Cargar entrenador </h1>
	
<br>


<form class="form-horizontal" method="POST" action="../trainer">
=======


<form class="form-horizontal" action="/action_page.php">
>>>>>>> staging

	@csrf

  <div class="form-group">
<<<<<<< HEAD

    <label class="control-label col-sm-2" for="name">Nombre</label>

=======
    <label class="control-label col-sm-1" for="name">Nombre</label>
>>>>>>> staging
    <div class="col-sm-10">


      <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre">


    </div>
  </div>


  <div class="form-group">
<<<<<<< HEAD
    
    <label class="control-label col-sm-2" for="correo">Correo</label>

=======
    <label class="control-label col-sm-1" for="name">Correo</label>
>>>>>>> staging
    <div class="col-sm-10"> 

      <input type="text" class="form-control" name="correo" placeholder="Ingrese Correo">

    </div>
  </div>

  
<<<<<<< HEAD
  </div>

  <div class="form-group"> 

    <div class="col-sm-offset-2 col-sm-10">

=======
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-1">
>>>>>>> staging
      <button type="submit" class="btn btn-primary">Guardar</button>


    </div>
  </div>
</form>

@endsection



	




</body>

</html>