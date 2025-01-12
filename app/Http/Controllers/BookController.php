<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function author()
    {
        return $this->belongsTo(Author::class); //caralho de linha de filho da puta quem foi a desgraça que fez isso pqp
    }

    public function index() {
        $books = Book::with('author')->get();
        $message = session('success');
        return view('book.index', compact('books', 'message'));
    }

    public function create()
    {
     $authors = Author::all();
     return view('book.create', compact('authors'));
    }

    public function store(Request $request) {
        $request -> validate([
            'titulo' => 'required|min:4|max:30',
            'ano_publicacao' => 'required',
            'ISBN' => 'required'
        ]);
        $books = Book::create($request->all());
        $message = "O livro $books->titulo foi cadastrado com sucesso!";
        return to_route('livros.index')->with('success', $message);
    }


    public function edit($id){//utilizei como primary key//
        $book = Book::find($id);
        $authors = Author::all();
        $auth = Author::find($book->author_id);
        return view('book.edit', compact('book', 'auth', 'authors'));
    }

    public function update(Request $request, $id) {
        $request -> validate([
            'titulo' => 'required',
            'ano_publicacao' => 'required',
            'ISBN' => 'required',
        ]);
        $book = Book::find($id);
        $book -> update($request->all());
        $message = "O livro $book->titulo foi editado com sucesso!";
        return to_route('livros.index')->with('success', $message);
    }

    public function destroy($id)//utilizei como primary key//
    {
        $books = Book::find($id);
        $books -> delete();
        $message = "O livro $books->titulo foi removido do sistema com sucesso!";
        return to_route('livros.index')->with('success', $message);
    }
}
