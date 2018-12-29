
@extends('books.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Books</div>
 <div class="content">
                <div class="title m-b-md">
                  <center>
                   <a class="nav-item nav-link active" href="{{route('books.index')}}"> 
                    <img src='{{asset('img/libro-azul.png')}}'>
                </a>
                </center>
                </div>

                
            </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
