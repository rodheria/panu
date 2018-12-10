@extends('layouts.main')

@section('content')

    <h1>Perfil de {{$user->name}}</h1>
    <h3>Posts:</h3>
    <ul>
        @foreach ($posts as $post)
            <li><a href="/posts/{{$post->id}}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection