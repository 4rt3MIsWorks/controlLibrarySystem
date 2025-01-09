@extends('layouts.layout')

@section('main')
    <main class="container py-5">
        <div>
            <div class="d-flex justify-content-center">
                <a href=" {{route('alunos.create')}} " class="btn btn-primary mt-2" style="font-size:20px">Cadastrar um Novo Estudante</a>
            </div>
            <br>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                <tr align="center" style="font-size:25px;" class="table-primary">
                    <th scope="col">ID do Estudante</th>
                    <th scope="col">Nome do Estudante</th>
                    <th scope="col">Matricula do Estudante</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody align="center">
                @foreach($students as $student)
                    <tr>
                        <th scope="row">{{ $student->id }}</th>
                        <td>{{ $student->nome }}</td>
                        <td>{{ $student->matricula }}</td>
                        <td>
                            <form method="POST" action="{{ route('alunos.destroy', $student->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection



