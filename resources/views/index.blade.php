@extends('layouts.layout')
@section('apresentacao')
    <div class="tituloC">
        <br>
        <h1 class="titulo text-center">Bem-vindo à Página de Listagem de Livros</h1>
        <br>
        <p class="cadastroText text-center">Abaixo esta a lista de livros da biblioteca do Senhor Raimundo.</p>
        <p class="cadastroText text-center">Aqui voce pode deletar ou editar os dados de um livros.</p>
    </div>
@endsection
@section('main')
    <style>
        .init-content {
            background-color: #2d3436;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .init-content h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .init-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .init-content img {
            width: 200px;
            height: auto;
            margin-bottom: 30px;
        }
    </style>
    <main class="container py-5">
        <div class="container init-content">
            <img src="https://via.placeholder.com/200" alt="Imagem Biblioteca" class="mx-auto d-block">
            <h1>Bem-vindo à Biblioteca do Senhor Raimundo</h1>
            <p>Um lugar onde o conhecimento e a imaginação se encontram. Explore nossas coleções de livros e descubra novos mundos!</p>
        </div>
    </main>
@endsection



