@extends('layouts.main') 

@section('content')
{{-- {{ dd(asset($post->filepath)) }} --}}
<div class="container py-2">
    <div class="row">
        <div class="col-sm-1">
                <h1><a class="btn-block" href="{{ URL::previous() }}"><ion-icon class="text-dark" name="arrow-round-back"></ion-icon></a></h1>
        </div>

        <div class="blog-post card py-3 px-4 col-xs-10 col-sm-10 align-self-center my-4">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta"> {{ $post->created_at }} - Autor: <a href="/user/{{$post->user->id}}">{{ $post->user->name }}</a></p>
            <img class="card-img-top" src="{{asset($post->filepath)}}" alt="Imagen del post">
            <p class="pt-4">{{ $post->content }}</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-10 offset-sm-1 mb-2">
            <h3 class="pb-2">Comentarios:</h3>
                @forelse ($comments as $comment)
                    {{-- <p class="py-0"><a href="/user/{{$comment->user()->first()->id}}">{{ $comment->user()->first()->name }}</a> dijo:</p>
                    <p class="">{{$comment->comment}}</p> --}}
                    
                    <div class="container pb-4">
                        <div class="row">
                            <div class="col-sm-1">
                                <div class="img-thumbnail">
                                    <a href="/user/{{$comment->user()->first()->id}}"><img class="img-fluid user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a>
                                </div><!-- /thumbnail -->
                            </div><!-- /col-sm-1 -->
                    
                            <div class="col-sm-5">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <a class="text-dark" href="/user/{{$comment->user()->first()->id}}"><strong>{{ $comment->user()->first()->name }}</strong></a> <span class="text-muted">{{$comment->created_at}}</span>
                                    </div>
                                    <div class="panel-body">
                                        {{$comment->comment}}
                                    </div><!-- /panel-body -->
                                </div><!-- /panel panel-default -->
                            </div><!-- /col-sm-5 -->
                        </div><!-- /row -->
                    </div><!-- /container -->


                @empty
                    <div class="alert">
                        <p>No hay comentarios.</p>
                    </div>
                @endforelse
            </ul>
        </div>
    </div>

    <div class="row">
        @auth
            <div class="form-group col-sm-10 offset-sm-1">
                <h3>Deja un comentario:</h3>

                @if (count($errors) > 0)
                    <div class="row col-6 offset-3 ">
                        <ul clasS="alert alert-danger text-center px-5">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>    
                @endif
                
                <form action="/comments/store/{{$post->id}}" method="post" class="">    
                    @csrf
                    <textarea class="form-control" name="comment" id="comment"></textarea>
                    <button type="submit" class="btn btn-primary my-2">Enviar</button>
                </form>
            </div>    
        @endauth
            <div class="alert col-sm-10 offset-sm-1">
            </div>
            @guest
            <div class="col-sm-10 offset-sm-1">
                    <p>Debes <a href="{{ route('login') }}">iniciar sesión</a> o <a href="{{ route('register') }}">registrarte</a> para poder hacer comentarios.</p>
            </div>
        @endguest
    </div>
</div>
@endsection