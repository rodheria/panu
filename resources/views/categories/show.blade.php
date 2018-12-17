@extends('layouts.main')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Categoria: 
        <small>{{$category->name}}</small>
        </h1>
        <h3>Posts:</h3>
        <ul>
            @forelse ($posts as $post)
                <div class="list-group py-2">
                    <a href="/posts/{{$post->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $post->title }}</h5>
                            <small>3 days ago</small>
                            
                          </div>
                          <p class="mb-1">{{ str_limit($post->content, 100)}}</p>
                          <div class="d-flex w-100 justify-content-between">
                            
                            <small>Posteado en {{$post->category->name}}</small>
                            <div>
                                @if (count($post->comments()->get()) > 0)
                                    Comentarios: <span class="badge badge-primary p-2">{{count($post->comments()->get())}}</span>    
                                @else
                                    Sin comentarios.
                                @endif
                                
                            </div>
                          </div>
                        </a>
                </div>
            @empty
                <p class="alert">La categoria no tiene posts.</p>
            @endforelse
            {{$posts->render()}}
        </ul>
    </div>
@endsection