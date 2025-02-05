@extends('layouts.layout')

@section('title', 'Cadastro - Alunos')


@section('apresentacao')
    <div class="tituloC">
        <br>
        <h1 class="titulo text-center">Bem-vindo à Página de Cadastro de Autores</h1>
        <br>
        <p class="cadastroText tex-center">Estamos felizes em ajudar você a cadastrar novos autores na biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText text-center">Por favor, preencha o formulário abaixo com atenção. Todos os campos são obrigatórios para que possamos registrar os dados corretamente no sistema.</p>
    </div>
@endsection

@section('main')
    <div class="container secCadastro">
        <div class="box">
            <div class="img-box">
                <img src="{{asset('images/livroFavicon.ico')}}">
            </div>
            <div class="form-box">
                <h2>Cadastrar Autor</h2>

                <form method="post" action="{{ route('autor.store') }}">
                    @csrf
                    <div class="input">
                        <label for="nome"> Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Digite o nome do autor neste campo" required>
                    </div>

                    <div class="input">
                        <label for="nacionalidade">Nacionalidade</label>
                        <input type="text" id="nacionalidade" name="nacionalidade" placeholder="Digite a nacionalidade neste campo" required>
                    </div>




                    <div class="input">
                        <button type="submit" >Cadastrar o Autor</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection





