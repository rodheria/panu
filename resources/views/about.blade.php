@extends('layouts.main')

@section('content')
<!-- Page Content -->
<div class="container">

		<!-- Introduction Row -->
		<h1 class="my-4">Quienes somos</h1>
		<p>Somos un grupo de desarrolladores con el objetivo de que ninguna mascota se quede sin hogar.</p>

		<!-- Team Members Row -->
		<div class="row">
		  <div class="col-lg-12">
			<h2 class="my-4">Nuestro equipo</h2>
		  </div>
		  <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="rounded-circle img-fluid d-block mx-auto" src="{{asset('images/about/rodrigoheredia.jpg')}}" width="200" alt="">
			<h3>Rodrigo Heredia</h3>
			<h4>Programador</h4>
			<p><a href="https://github.com/rodheria/" target="_blank">Github</a></p>
		  </div>
		  <div class="col-lg-4 col-sm-6 text-center mb-4 mx-auto">
			<img class="rounded-circle img-fluid d-block mx-auto" src="{{asset('images/about/geo.jpg')}}" width="200" alt=""> 
			<h3>Georgina Rampinini</h3>
			<h4>Programadora</h4>
			<p><a href="https://github.com/georamp/" target="_blank">Github</a></p>
		  </div>
		</div>

	  </div>
	  <!-- /.container -->
@endsection
