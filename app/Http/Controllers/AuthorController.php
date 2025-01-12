<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller {

    function index() {
        $authors = Author::all();
        $message = session('success');
        return view('author.index', compact('authors', 'message'));
    }

    public function create() {
        return view('author.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'nome' => 'required|min:4|max:30',
            'nacionalidade' => 'required|min:4|max:30'
        ]);
        $authors = Author::create($request->all());
        $message = "O autor $authors->nome foi cadastrado com sucesso!";
        return to_route('autor.index')->with($message,'success');



    }

    public function destroy($authorID) {
        $author = Author::find($authorID);
        $author->delete();
        $message = "O autor $author->nome foi removido do sistema com sucesso!";
        return to_route('autor.index')->with('success', $message);
    }

    public function edit($nome)//primary kew do autor //
    {
        return view('author.edit');
    }

    public function update(Request $request, Author $author)
    {
        /*
        $request -> validate
        ([

        área para o request

        ]);
        */
        $author -> update($request->all());
        $message = "O autor $author->nome foi editado com sucesso!";
        return to_route('author.index')->with('success', $message);
    }

}
