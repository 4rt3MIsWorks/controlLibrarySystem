@extends('layouts.layout')

@section('apresentacao')
    <br>
    <div class="tituloC">
        <br>
        <h1 class="titulo text-center">Bem-vindo à Página de Listagem de Empréstimo</h1>
        <br>
        <p class="cadastroText text-center">Abaixo esta a lista de empréstimos da biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText text-center">Aqui voce pode deletar ou editar os dados de um empréstimo.</p>
    </div>
@endsection
@section('main')
    <main class="container py-5">
        <div>
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
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loans as $loan)
                        <tr>
                            <th scope="row">{{ $loan->id }}</th>
                            <td>{{ $loan->student->nome}}</td>
                            <td>{{ $loan->books->titulo}}</td>
                            <td>{{ $loan->data_emprestimo}}</td>
                            @if( $loan->data_devolucao === 0 )
                                <td><hr style="color:black; border-width: 7px"></td>
                            @else
                                <td>{{ $loan->data_devolucao}}</td>
                            @endif
                            @if( $loan->status === 0 )
                                <td>Emprestado</td>
                            @else
                                <td>Devolvido</td>
                            @endif
                            <td>
                                <div class=" button-group">
                                    <form method="POST" action="{{ route('emprestimos.destroy', $loan->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>

                                    <form method="GET" action="{{ route('emprestimos.edit', $loan->id) }}">
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
                <a href="{{ route('emprestimos.create') }}" class="btn-cadastro">Cadastrar um novo Empréstimo</a>
            </div>
        </div>
    </main>
@endsection
