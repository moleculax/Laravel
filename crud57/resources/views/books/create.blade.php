@extends('books.layout')
@section('content')
<h1 class="text-center">Agregar libros.</h1>
<hr>
<form action="{{route('books.store')}}" method="POST">
  @csrf <!--Token que usa laravel para su protección -->
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <strong>Titulo:</strong>
      <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Título del libro"> <!-- {{old('title')}} se usa para que coloque el valor anterior cuando se valida -->
      @if ($errors->has('title'))
          <!--Carga el mensaje de StoreRequest creado con php artisan make:request StoreRequest -->
          <strong class="text-danger">{{ $errors->first('title') }}</strong>
      @endif
    </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <strong>Descripción</strong>
      </div>
      <textarea class="form-control" name="descripcion" placeholder="Reseña">
        {{old('descripcion')}}
      </textarea>
       @if ($errors->has('descripcion'))
          <!--Carga el mensaje de StoreRequest creado con php artisan make:request StoreRequest -->
          <strong class="text-danger">{{$errors->first('descripcion')}}</strong>
      @endif
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </div>
@endsection