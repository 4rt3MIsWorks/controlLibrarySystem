@extends('layouts.layout')

@section('apresentacao')
    <div class="tituloC">
        <br>
        <h1 class="titulo text-center">Bem-vindo à Página de Listagem de Livros</h1>
        <br>
        <p class="cadastroText text-center">Abaixo esta a lista de livros da biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText text-center">Aqui voce pode deletar ou editar os dados de um livros.</p>
    </div>
@endsection
@section('main')
    <main class="container py-5">
        <div>
            <div class="table-container">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>ID do Livro</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Ano</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th scope="row">{{ $book->id }}</th>
                            <td>{{ $book->titulo }}</td>
                            <td>{{ $book->author->nome}}</td>
                            <td>{{ $book->ano_publicacao}}</td>
                            <td>
                                <div class=" button-group">
                                    <form method="POST" action="{{ route('livros.destroy', $book->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    <form method="GET" action="{{ route('livros.edit', $book->id) }}">
                                        @csrf
                                        <button type="submit" class="btn btn-edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <a href="{{ route('autor.create') }}" class="btn-cadastro">Cadastrar Novo Livro</a>
            </div>
        </div>
    </main>
@endsection




