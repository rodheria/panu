@extends('layouts.main')

@section('content')
<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron bg-panu mt-4">
      <h1 class="display-4 font-weight-bold text-light text-center">Bienvenido a Panu!</h1>
      <h3 class=" text-light text-center ">Entre todos podemos ayudar a reencontrar a las mascotas con sus dueños, es por eso que creamos Panu, un sitio donde vas a poder encontrar tu mascota con la ayuda de la gente.</h3>
      <div class="text-center mt-5">
        <a href="{{route('posts')}}" class="btn btn-light btn-lg text-center">Ver busquedas activas</a>
      </div>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Encontrá tu mascota perdida!</h4>
            <p class="card-text">Recibiras actualizaciones por email sobre tus busquedas activas.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Crear busqueda!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Encontraste una mascota perdida?</h4>
            <p class="card-text">Publicá que hallaste una mascota y en que zona fue, así el dueño puede reencontrarse de una manera mas sencilla.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Publicar mascota encontrada!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
