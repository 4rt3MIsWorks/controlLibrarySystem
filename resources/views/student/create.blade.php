@extends('layouts.layout');

@section('title', 'Cadastro - Alunos');


@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Bem-vindo à Página de Cadastro de Alunos</h1>
        <p class="cadastroText">Estamos felizes em ajudar você a cadastrar novos alunos na biblioteca do Senhor Raimundo. <br>Aqui, você pode adicionar informações detalhadas sobre cada estudante para garantir que eles tenham acesso completo aos nossos serviços.</p>
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
            <h2>Cadastrar Aluno</h2>

            <form method="post" action="{{ route('alunos.store') }}">
            @csrf
                <div class="input">
                    <label for="nome"> Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite o nome do estudante neste campo" required>
                </div>

                <div class="input">
                    <label for="matricula">Matricula</label>
                    <input type="text" id="matricula" name="matricula" placeholder="Digite a matricula do aluno neste campo" required>
                </div>




                <div class="input">
                    <button type="submit" >Cadastrar o Estudante</button>
                </div>

            </form>
        </div>
    </div>
    </div>
@endsection

