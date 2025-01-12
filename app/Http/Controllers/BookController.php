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

    public function index()
    {
        $books = Book::with('author')->get();
        $message = session('success');
        return view('book.index', compact('books', 'message'));
    }

    public function create()
    {
     $authors = Author::all();
     return view('book.create', compact('authors'));
    }

    public function store(Request $request)
    {



        $books = Book::create($request->all());

        $message = "O livro $books->titulo foi cadastrado com sucesso!";
        return to_route('book.index')->with('success', $message);
    }


    public function edit($isbn)//utilizei como primary key//
    {
        return view('book.edit');
    }

    public function update(Request $request, Books $books)
    {
            /*
            $request -> validate
            ([

            área para o request

            ]);
            */
        $books -> update($request->all());
        $message = "O livro $books->titulo foi editado com sucesso!";
        return to_route('book.index')->with('success', $message);
    }

    public function destroy($ISBN)//utilizei como primary key//
    {
        $books = Book::find($ISBN);
        $books -> delete();
        $message = "O livro $books->titulo foi removido do sistema com sucesso!";
        return to_route('book.index')->with('success', $message);
    }
}
