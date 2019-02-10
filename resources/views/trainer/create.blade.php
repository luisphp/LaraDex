@extends('layouts.app')



@section('title', 'Trainers Create')

@section('content')


<br>
<br>


<h1> Cargar entrenador </h1>
	
<br>




<form class="form-group" method="POST" action="../trainer" enctype="multipart/form-data">


	@csrf

  <div class="form-group">


    <label class="control-label col-sm-2" for="name">Nombre</label>


        <div class="col-sm-10">


          <input type="text" class="form-control" placeholder="Ingrese Nombre" name="nombre">


        </div>
    </div>


      <div class="form-group">

        
        <label class="control-label col-sm-1" for="correo">Correo</label>

            <div class="col-sm-10"> 

              <input type="text" class="form-control" name="correo" placeholder="Ingrese Correo">

            </div>
      </div>

      <div class="form-group">

        
        <label class="control-label col-sm-1" for="avatar">Avatar</label>

            <div class="col-sm-10"> 

              <input type="text" class="form-control" name="avatar" placeholder="Link de la Imagen">

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

          <button type="submit" class="btn btn-primary">Guardar</button>


        </div>

</form>

@endsection



	




</body>

</html>