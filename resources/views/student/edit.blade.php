@extends('layouts.layout')

@section('title', 'Editar Alunos')

@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Editar Alunos</h1>
        <p class="cadastroText">Aqui você pode editar as informações do aluno selecionado.</p>
        <p class="cadastroText">Certifique-se de preencher todos os campos corretamente.</p>
    </div>
@endsection

@section('main')
    <div class="container secCadastro">
        <div class="box">
            <div class="img-box">
                <img src="{{ asset('images/livroFavicon.ico') }}" alt="Ícone">
            </div>
            <div class="form-box">
                <h2>Editar Aluno</h2>

                <form method="post" action="{{ route('alunos.update', $student->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="input">
                        <label for="nome">Nome Completo</label>

                        <input type="text" id="nome" name="nome" value="{{ old('nome', $student->nome) }}" placeholder="Digite o nome do estudante neste campo" required>
                    </div>

                    <div class="input">
                        <label for="matricula">Matrícula</label>

                        <input type="text" id="matricula" name="matricula" value="{{ old('matricula', $student->matricula) }}" placeholder="Digite a matrícula do aluno neste campo" required>
                    </div>

                    <div class="input">
                        <button type="submit">Editar o Estudante</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
