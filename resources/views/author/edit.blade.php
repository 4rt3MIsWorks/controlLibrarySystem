@extends('layouts.layout')

@section('title', 'Cadastro - Autores')


@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Bem-vindo à Página Edição de Autores</h1>
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
                <h2>Cadastrar Autor</h2>

                <form method="post" action="{{ route('autor.update', $author->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="input">
                        <label for="nome"> Nome</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome', $author->nome) }}" placeholder="Digite o nome do autor neste campo" required>
                    </div>

                    <div class="input">
                        <label for="nacionalidade">Nacionalidade</label>
                        <input type="text" id="nacionalidade" name="nacionalidade" value="{{ old('nacionalidade', $author->nacionalidade) }}" placeholder="Digite a nacionalidade neste campo" required>
                    </div>




                    <div class="input">
                        <button type="submit" >Editar o Autor</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection





