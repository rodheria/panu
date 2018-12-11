@extends('layouts.main') 

@section('content')
<div class="container row">
    <div class="col-sm-1">
            <h1><a class="btn-block" href="{{ URL::previous() }}"><ion-icon class="text-dark" name="arrow-round-back"></ion-icon></a></h1>
    </div>

    <div class="blog-post col-xs-10 col-sm-10 offset-sm-1 align-self-center my-4">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta"> {{ $post->created_at }} - Autor: <a href="#">{{ $post->user->name }}</a></p>

        <p>{{ $post->content }}</p>
    </div>
</div>

@endsection