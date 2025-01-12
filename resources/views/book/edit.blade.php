@extends('layouts.layout');

@section('title', 'Cadastro - Alunos');


@section('apresentacao')
    <div class="tituloC">
        <br>
        <h1 class="titulo text-center">Bem-vindo à Página de Edição de Livros</h1>
        <br>
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
                <h2>Editar o Livro</h2>

                <form method="post" action="{{ route('livros.update', $book->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="input">
                        <label for="titulo">Titulo</label>
                        <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $book->titulo) }}" placeholder="Digite o titulo do livro neste campo" required>
                    </div>

                    <div class="input">
                        <label for="author_id">Autor</label>
                        <select id="author_id" name="author_id" required>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}" {{ $author->id == $book->author_id ? 'selected' : '' }}>{{ $author->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input">
                        <label for="ano_publicacao">Ano de Publicação</label>
                        <input type="number" id="ano_publicacao" name="ano_publicacao" value="{{ old('ano_publicacao', $book->ano_publicacao) }}" placeholder="Digite o ano da publicação neste campo" required>
                    </div>

                    <div class="input">
                        <label for="ISBN">Codigo do livro</label>
                        <input type="number" id="ISBN" name="ISBN" value="{{ old('ISBN', $book->ISBN) }}" placeholder="Digite os numeros do codigo do livro neste campo" required>
                    </div>



                    <div class="input">
                        <button type="submit" >Editar o Livro</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

