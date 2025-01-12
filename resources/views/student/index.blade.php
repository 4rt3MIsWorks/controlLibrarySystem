@extends('layouts.layout')

@section('apresentacao')
    <div class="tituloC">
        <br>
        <h1 class="titulo text-center">Bem-vindo à Página de Listagem de Alunos</h1>
        <br>
        <p class="cadastroText text-center">Abaixo esta a lista de alunos cadastrados na biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText text-center">Aqui voce pode deletar ou editar os dados de um aluno.</p>
    </div>
@endsection
@section('main')
    <main class="container py-5">
        <div>
            <div class="table-container">
                <table class="styled-table">
                    <thead>
                    <tr>
                        <th>ID do Aluno</th>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->nome }}</td>
                            <td>{{ $student->matricula }}</td>
                            <td>
                                <div class=" button-group">
                                <form method="POST" action="{{ route('alunos.destroy', $student->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>

                                <form method="GET" action="{{ route('alunos.edit', $student->id) }}">
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

                <a href="{{ route('alunos.create') }}" class="btn-cadastro">Cadastrar novo estudante</a>

                <a href="{{ route('alunos.create') }}" class="btn-cadastro">Cadastrar um novo Aluno</a>

            </div>
        </div>
    </main>
@endsection



