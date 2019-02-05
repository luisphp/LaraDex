@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')

<h1> Cargar entrenador </h2>




<form class="form-horizontal" action="/action_page.php">


  <div class="form-group">
    <label class="control-label col-sm-1" for="name">Nombre</label>
    <div class="col-sm-10">
      <input type="Nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-1" for="name">Correo</label>
    <div class="col-sm-10"> 
      <input type="Apellido" class="form-control" id="correo" placeholder="Ingrese Correo">
    </div>
  </div>

  
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-1">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>

@endsection



	




</body>

</html>