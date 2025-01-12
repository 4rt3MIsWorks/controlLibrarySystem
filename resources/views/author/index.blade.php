@extends('layouts.layout')

@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Bem-vindo à Página de Listagem de Autores</h1>
        <p class="cadastroText">Abaixo esta a lista de autores com obras cadastradas na biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText">Aqui voce pode deletar ou editar os dados de um autor.</p>
    </div>
@endsection
@section('main')
    <main class="container py-5">
        <div>
            <div class="table-container">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>ID do Autor</th>
                        <th>Nome</th>
                        <th>Nacionalidade</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($authors as $author)
                        <tr>
                            <th scope="row">{{ $author->id }}</th>
                            <td>{{ $author->nome }}</td>
                            <td>{{ $author->nacionalidade }}</td>
                            <td>
                                <div class=" button-group">
                                    <form method="POST" action="{{ route('autor.destroy', $author->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    <form method="GET" action="{{ route('autor.edit', $author->id) }}">
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
                <a href="{{ route('autor.create') }}" class="btn-cadastro">Cadastrar Novo Autor</a>
            </div>
        </div>
    </main>
@endsection




