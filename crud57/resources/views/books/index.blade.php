@extends('books.layout')
@section('content')
<h1 class="text-center">LIBROS</h1>
<div class="container">
	
<form class="navbar-form navbar-left pull-right" role="search" method="GET" action="{{route('books.index')}}">
	<div class="form-group">
		<input type="text" class="form-control pull-right" name="" placeholder="Buscar" >
		<button type="submit" class="btn btn-default">Buscar</button>
	</div>
	

</form>


	<a class="btn btn-info mb-3" href="{{route('books.create')}}">Agregar Libros </a>
<table class="table">
  <thead class="thead-dark">
    <tr>
    	@if (Session::has('message'))
    		<div class="alert alert-info">{{ Session::get('message')}}</div>
    	@endif
      <th scope="col">id</th>
      <th scope="col">Título</th>
      <th scope="col">Reseña</th>
      <th scope="col">Acciones</th>
     
    </tr>
  </thead>
  <tbody>
  	@foreach($books as $book)
    <tr>
      <th scope="row">{{$book->id}}</th>
      <td><a href="{{route('books.show',$book->id)}}">{{$book->title}}</a> </td>
      <td class="text-justify">{{$book->descripcion}}</td>
      <td><a class="btn btn-info" href="{{route('books.edit',$book->id)}}">Editar</a>
      	<!--Para eliminar registros el metodo DELETE se ve con php artisan route:list -->
      	<form action="{{route('books.destroy',$book->id)}}" method="POST">
      		@csrf <!-- Token de seguridad -->
      		@method('DELETE') 
      		<button type="submit" class="btn btn-danger mt-3" onclick="return confirm('¿Quiere borrar este registro?')">Eliminar</button>
      	</form>

      </td>
    </tr>
   @endforeach
  </tbody>
</table>
<!--Permite ver la paginacion de los resultados  -->
{{$books->links()}}
</div>

@endsection