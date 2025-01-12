@extends('layouts.layout');

@section('title', 'Cadastro - Alunos');


@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Bem-vindo à Página de Edição de Emprestimos</h1>
        <br>
        <p class="cadastroText">Por favor, preencha o formulário abaixo com atenção. Todos os campos são obrigatórios para que possamos registrar os dados corretamente no sistema.</p>
    </div>
@endsection

@section('main')
    <div class="container secCadastro">
        <div class="box">
            <div class="img-box">
                <img src="{{asset('images/livroFavicon.ico')}}">
            </div>
            <div class="form-box">
                <h2>Editar Emprestimos</h2>

                <form method="post" action="{{ route('emprestimos.update', $loan->id) }}">
                    @csrf
                    @method('PUT')

                    <p style="font-weight: bold">Para efetuar a Edição de um empréstimo, o livro e o aluno devem estar cadastrados no sistema previamente.</p>

                    <div class="input">
                        <label for="books_id">Livro</label>
                        <select id="books_id" name="books_id" required>
                            @foreach($books as $book)

                                <option value="{{ $book->id }}" {{ $book->id == $loan->books_id ? 'selected' : '' }}>{{ $book->titulo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input">
                        <label for="student_id">Estudante</label>
                        <select id="student_id" name="student_id" required>
                            @foreach($students as $student)

                                <option value="{{ $student->id }}" {{ $student->id == $loan->student_id ? 'selected' : '' }}>{{ $student->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input">
                        <label for="data_emprestimo">Data do Empréstimo</label>
                        <input type="date" id="data_emprestimo" name="data_emprestimo" value="{{ $loan->data_emprestimo }}" required>
                    </div>

                    <div class="input">
                        <label for="data_devolucao">Data da Devolução</label>
                        <input type="date" id="data_devolucao" name="data_devolucao" value="{{ $loan->data_devolucao }}">
                    </div>

                    <div class="input">
                        <button type="submit">Efetuar Empréstimo</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection



