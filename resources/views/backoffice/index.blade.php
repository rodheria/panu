@extends('layouts.main') 

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2 col-10 offset-1 py-4">
        <h4>Usuarios activos</h4>
        <hr>
        <ul class="unstyled-list">
            <button data-toggle="collapse" data-target="#users">Usuarios</button>
            <div id="users" class="collapse">
                @foreach($users as $user)
                <li class="d-flex flex-row">
                    <a class="mr-auto p-2" href="/user/{{ $user->id }}">{{ $user->name }}</a>
                    <div class="buttons-admin d-flex">
                        <form action="/backoffice/user/delete/{{ $user->id }}" method="post" class="p-2">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                        <div class="d-flex">
                            <a href="#" class="btn btn-warning p-2">Editar</a>
                        </div>  
                    </div>
                </li>
                <hr>
                @endforeach
            </div>
            
        </ul>
        <h4>Posts activos</h4>
        <hr>
        <ul class="unstyled-list">
            <button data-toggle="collapse" data-target="#posts">Posts</button>
            <div id="posts" class="collapse">
                @foreach($posts as $post)
                <li class="d-flex flex-row">
                    <a class="mr-auto p-2" href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <div class="buttons-admin d-flex">
                        <form action="/backoffice/user/delete/{{ $post->id }}" method="post" class="p-2">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </form>
                        <div class="d-flex">
                            <a href="#" class="btn btn-warning p-2">Editar</a>
                        </div>  
                    </div>
                </li>
                <hr>
                @endforeach
            </div>
            
        </ul>
    </div>
</div>

@endsection