@extends('layouts.main') 
@section('content')

<div class="container">

    @if(count($errors) > 0)
    <div class="row col-6 offset-3">
        <ul clasS="alert alert-danger">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-8 offset-2">
        <form class="form" action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
            <select class="custom-select" name= "category_id"}>
            @foreach($categories as $category)
            <option value= "{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            <option selected>Selecciona una categoria</option>
            <option value="1">Quiero Adoptar</option>
            <option value="2">Publicar una mascota perdida</option>
            <option value="3"> Busco Hogar de transito</option>
            </select>
            
                    
                
            </div>
            <div class="form-group">
                <label for="content"></label>
                <textarea class="form-control" name="content" cols="30" rows="10"></textarea>
            </div>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileLang" lang="es">
                <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                
            </div>
                <input type="submit" class="btn btn-danger form-control col-6 offset-3">
        </form>
        </div>
    </div>
</div>

@endsection