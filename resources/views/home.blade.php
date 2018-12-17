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
    <div class="row text-center py-4">

      <div class="col-lg-3 col-md-6 mb-4 h-100">
        <div class="">
          <img class="img-fluid" src="{{asset('images/044-dog.png')}}" width="150" alt="">
          <div class="my-3">
            <h4 class="card-title">Encontrá a tu mascota perdida!</h4>
            <p class="card-text">Recibiras actualizaciones por email sobre tus busquedas activas.</p>
          </div>
          <div class="">
            <a href="{{ route('createpost') }}" class="btn btn-primary">Crear busqueda!</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 h-100">
        <div class="">
          <img class="img-fluid" src="{{asset('images/014-cat-house.png')}}" width="150" alt="">
          <div class="my-3">
            <h4 class="card-title">Encontraste una mascota perdida?</h4>
            <p class="card-text">Publicá que hallaste una mascota y en que zona fue, así el dueño puede reencontrarse de una manera mas sencilla.</p>
          </div>
          <div class="">
            <a href="{{ route('createpost') }}" class="btn btn-primary">Publicar mascota encontrada!</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 h-100">
        <div class="">
          <img class="img-fluid" src="{{asset('images/020-pet-shop.png')}}" width="150" alt="">
          <div class="my-3">
            <h4 class="card-title">Preguntas frecuentes</h4>
            <p class="card-text">Sacate las dudas con esta serie de respuestas a las preguntas mas comunes.</p>
          </div>
          <div class="">
            <a href="{{ route('faq') }}" class="btn btn-primary">Ir a Preguntas Frecuentes</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 h-100">
        <div class="">
          <img class="img-fluid" src="{{asset('images/043-first-aid-kit.png')}}" width="150" alt="">
          <div class="my-3">
            <h4 class="card-title">Contactanos!</h4>
            <p class="card-text">Seguis con dudas? Tenes alguna sugerencia? Queres hacernos un comentario?</p>
          </div>
          <div class="align-baseline">
            <a href="{{ route('contact') }}" class="btn btn-primary">Escribinos aqui!</a>
          </div>
        </div>
      </div>
      
      {{-- <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
          <img class="card-img-top img-fluid img-thumbnail" src="{{ asset('images/014-cat-house.png') }}" alt="">
          <div class="card-body">
            <h4 class="card-title"></h4>
            <p class="card-text"></p>
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
      </div> --}}

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
