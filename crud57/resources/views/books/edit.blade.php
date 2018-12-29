@extends('books.layout')
@section('content')
<h1 class="text-center">Actualizar libros.</h1>
<hr>
<form action="{{route('books.update',$book->id)}}" method="POST">
  @csrf <!--Token que usa laravel para su protección -->
  @method('PUT') <!-- con  php artisan route:list se ve el metodo a usar en este caso -->
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="form-group">
      <strong>Titulo:</strong>
      <input type="text" name="title" value="{{$book->title}}" class="form-control" placeholder="Título del libro">
    </div>
    </div>
    <div class="col-sm-12">
      <div class="form-group">
        <strong>Descripción</strong>
      </div>
      <textarea class="form-control" name="descripcion" placeholder="Reseña">{{$book->descripcion}}</textarea>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
  </div>
@endsection