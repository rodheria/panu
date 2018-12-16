@extends('layouts.main') 

@section('content')
<link rel="stylesheet" href="{{asset('css/blog-home.css')}}">
{{-- <ul>
@foreach($posts as $post) 
<li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
@endforeach
</ul> --}}

<!-- Page Content -->
<div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Posts
          {{-- <small>Secondary Text</small> --}}
        </h1>
        
        @forelse ($posts as $post)
            <!-- Blog Post -->
        <div class="card mb-4">
            <a href="/posts/{{$post->id}}"><img class="card-img-top" src="http://placehold.it/750x500" alt="Card image cap"></a>
            <div class="card-body">
              <h2 class="card-title"><a class="text-dark" href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
              <p class="card-text">{{ str_limit($post->content, 100)}}</p>
              <a href="/posts/{{$post->id}}" class="btn btn-primary">Leer más!</a>
            </div>
            <div class="card-footer text-muted">
              Posteado el {{$post->created_at}} por <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a>
            </div>
          </div>
          {{-- End Blog Post --}}
        @empty
            
        @endforelse
        
        {{$posts->render()}}
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        {{-- <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    @forelse ($categories as $category)      
                    <div class="">
                        <li>
                            <span class="badge badge-primary p-2 my-1 ml-auto">{{count($category->posts)}}</span>
                            <a href="#">{{$category->name}}</a>
                        </li>      
                    </div>
                    @empty
                        
                    @endforelse
                  

                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="my-4">
          {{-- <h5 class="card-header"></h5> --}}
                <a class="btn btn-outline-primary w-100" href="{{route('createpost')}}">
                    Crear post
                </a>
          {{-- <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div> --}}
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@endsection