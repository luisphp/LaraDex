<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">


<title>LaraDex - @yield('title')</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="./">LaraDex</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item inactive">
        <a class="nav-link" href="./trainer/create"> Crear Trainer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Editar Trainer</a>
      </li>
     
 
    </ul>
   
  </div>
</nav>

	<div style="margin-top: 90px" class="container">

@include('layouts.flash-message')


@yield('content')

</div>


</body>

</html>