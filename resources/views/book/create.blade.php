@extends('layouts.layout');

@section('title', 'Cadastro - Alunos');


@section('apresentacao')
    <div class="tituloC">
        <h1 class="titulo">Bem-vindo à Página de Cadastro de Livros</h1>
        <p class="cadastroText">Estamos felizes em ajudar você a cadastrar novos livros na biblioteca do Senhor Raimundo.</p>
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
                <h2>Cadastrar Livro</h2>

                <form method="post" action="{{ route('livros.store') }}">
                    @csrf

                    <p style="font-weight: bold">Para efetuar o cadastro de um livro, antes deve-se cadastrar o autor do mesmo*</p>


                    <div class="input">
                        <label for="titulo">Titulo</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Digite o titulo do livro neste campo" required>
                    </div>

                    <div class="input">
                        <label for="author_id">Autor</label>
                        <select id="author_id" name="author_id" required>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input">
                        <label for="ano_publicacao">Ano de Publicação</label>
                        <input type="number" id="ano_publicacao" name="ano_publicacao" placeholder="Digite o ano da publicação neste campo" required>
                    </div>

                    <div class="input">
                        <label for="ISBN">Codigo do livro</label>
                        <input type="number" id="ISBN" name="ISBN" placeholder="Digite os numeros do codigo do livro neste campo" required>
                    </div>



                    <div class="input">
                        <button type="submit" >Cadastrar Livro</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

