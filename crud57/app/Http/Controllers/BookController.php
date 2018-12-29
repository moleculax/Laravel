<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Session;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Este controlador muestra en pantalla el contenido
        //$books = Book::all(); //Trae todos los registros
        //pagina de 4 registros  por pagina.
        $books = Book::orderBy('id','DESC')->paginate(4); 

        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Este controlador retorna vista para inserta contenido
        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validamos los campos.
        $request->validate([
            'title'=>'required',
            'descripcion'=>'required'
        ]);
        Book::create($request->all());
        //como se usa Session hay que declararlo arriba con: use Session;
        Session::flash('message','Libros creados correctamente');
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
        return view('books.edit',compact('book'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //Validamos los campos.
        $request->validate([
            'title'=>'required',
            'descripcion'=>'required'
        ]);
        
        $book->update($request->all());

        Session::flash('message','Libro actualizado correctamente');
        return redirect()->route('books.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //Se usa para eliminar registros
        $book->delete();
        Session::flash('message','Libro ha sido borrado correctamente');
        return redirect()->route('books.index');
    }
}
