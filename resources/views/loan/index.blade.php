@extends('layouts.layout')

@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Bem-vindo à Página de Listagem de Livros</h1>
        <p class="cadastroText">Abaixo esta a lista de livros da biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText">Aqui voce pode deletar ou editar os dados de um livros.</p>
    </div>
@endsection
@section('main')
    <main class="container py-5">
        <div> id, livro_id, aluno_id, data_emprestimo, data_devolucao, status.
            <div class="table-container">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>ID do Emprestimo</th>
                        <th>Aluno</th>
                        <th>Livro</th>
                        <th>Data Emprestimo</th>
                        <th>Data Devolução</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <th scope="row">{{ $loan->id }}</th>
                            <td>{{ $loan->students->nome}}</td>
                            <td>{{ $loan->book->titulo}}</td>
                            <td>{{ $loan->data_emprestimo}}</td>
                            <td>{{ $loan->data_devolucao}}</td>
                            <td>{{ $loan->status}}</td>


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




