@extends('layouts.main')
@section('content')
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>

        <div class="row">
            @foreach ($faqArr as $question => $answer)
                <div class="col-lg-4 col-sm-6 portfolio-item mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">{{$question}}</a>
                        </h4>
                        <p class="card-text">{{$answer}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection