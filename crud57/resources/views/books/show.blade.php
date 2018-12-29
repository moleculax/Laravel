@extends('books.layout')
@section('content')
<div class="container mt-3">
<div class="card">
  <div class="card-header bg-prymary ">
  <h2> {{$book->title}}</h2>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p class="text-justify">{{$book->descripcion}}.</p>
      <footer class="blockquote-footer"> {{$book->created_at}}</footer>
    </blockquote>
  </div>
</div>

</div>
@endsection