@extends('layouts.layout')

@section('title','Cadastros')
@section('main')

    <div class="container secCadastro">
        <div class="cabecaSecao">
            <h4 class="titulo text-white ">Seção de Cadastro!</h4>
            <p class="text-white subTitulo">Abaixo as opções:</p>
        </div>
        <div class=" cardContainer d-flex gap-5">
            <div class="card p-5 w-75 d-flex cadastrar aluno">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconAluno" src="{{ asset('images/cadastro/iconAluno.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="alunos"> Realize o cadastro de novos alunos para uso dos recursos da biblioteca do Senhor
                        Raimundo.</p>

                </div>

                <button class="btn align-items-center btnAlunos" type="button"
                        onclick="window.open('{{ route('alunos.create') }}', '_self')">
                    Ir para Alunos
                </button>
            </div>

            <div class="card p-5 w-75 d-flex cadastrar autor">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconAutor" src="{{ asset('images/cadastro/author.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="autores"> Realize o cadastro de novos alunos para uso dos recursos da biblioteca do Senhor
                        Raimundo.</p>

                </div>
                <button class="btn align-items-center btnAutores" type="button"
                        onclick="window.open('https://twitter.com', '_blank')">
                    Ir para Autores
                </button>
            </div>
            <div class="card p-5 w-75 d-flex cadastrar livro">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconLivro" src="{{ asset('images/cadastro/livro.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="livros"> Realize o cadastro de novos alunos para uso dos recursos da biblioteca do Senhor
                        Raimundo.</p>

                </div>
                <button class="btn align-items-center btnLivros" type="button"
                        onclick="window.open('https://twitter.com', '_blank')">
                    Ir para Livros
                </button>
            </div>
        </div>
    </div>

@endsection
