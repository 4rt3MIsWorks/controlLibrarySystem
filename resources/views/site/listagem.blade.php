@extends('layouts.layout')

@section('title','Listagem')
@section('main')

    <div class="container secCadastro">
        <div class="cabecaSecao">
            <h4 class="titulo text-white text-center">Seção de Listagem</h4>
            <p class="text-white subTitulo text-center">Abaixo as opções:</p>
        </div>
        <br>
        <br>
        <div class=" cardContainer d-flex gap-5">
            <div class="card p-5 w-75 d-flex cadastrar aluno">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconAluno" src="{{ asset('images/cadastro/icon-aluno.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="alunos">Observe a lista de todos os alunos registrados no sistema da nossa biblioteca.</p>
                </div>
                <button class="btn align-items-center btnAlunos" type="button"
                        onclick="window.open('{{ route('alunos.index') }}', '_self')">
                    Ir para Alunos
                </button>
            </div>

            <div class="card p-5 w-75 d-flex cadastrar autor">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconAutor" src="{{ asset('images/cadastro/icon-author.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="autores"> Conheça os autores que deram vida às obras do nosso acervo.
                        </p>

                </div>
                <button class="btn align-items-center btnAutores" type="button"
                        onclick="window.open('{{ route('autor.index') }}', '_self')">
                    Ir para Autores
                </button>
            </div>
            <div class="card p-5 w-75 d-flex cadastrar livro">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconLivro" src="{{ asset('images/cadastro/icon-livro.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="livros">Explore o acervo completo de livros disponíveis na biblioteca do Senhor Raimundo.
                        </p>

                </div>
                <button class="btn align-items-center btnLivros" type="button"
                        onclick="window.open('{{ route('livros.index') }}', '_self')">
                    Ir para Livros
                </button>
            </div>
            <div class="card p-5 w-75 d-flex cadastrar livro">
                <div class="cardImg ">
                    <div class="decoracaoBorda">
                        <img class="cardIconEmprestimo" src="{{ asset('images/cadastro/icon-emprestimo.png') }}" alt="">
                    </div>
                </div>
                <div class="cardText">
                    <p class="livros">Acompanhe os empréstimos realizados, suas datas e seus status.</p>

                </div>
                <button class="btn align-items-center btnEmprestimos" type="button"
                        onclick="window.open('{{ route('emprestimos.index') }}', '_self')">
                    Ir para Emprestimos
                </button>
            </div>
        </div>
    </div>

@endsection

