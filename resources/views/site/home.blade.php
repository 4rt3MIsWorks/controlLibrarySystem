@extends('layouts.layout')

@section('title', 'Biblioteca Sr. Raimundo')

@section('apresentacao')

@endsection

@section('main')
    <div class="cabecaSecao ">
        <h4 class="titulo text-white text-center">Bem vindo a nossa Biblioteca</h4>
        <h3 class="text-white subTitulo text-center">A 80 anos horando o legado de Raimundo Oliveira</h3>
    </div>
    <br>
    <br>
    <!-- Carrossel -->
    <div class="home-section section-1">
        <div class="align-content-center carousel">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <img src="{{ asset('images/bbtc.jpg') }}" alt="Imagem da biblioteca">
                    <div class="carousel-text">
                        <h2>Bem-vindo à Biblioteca do raimundo</h2>

                    </div>
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('images/bbtc2.jpg') }}" alt="Estante de livros">
                    <div class="carousel-text">
                        <h2>Explore nosso acervo</h2>

                    </div>
                </div>
                <div class="carousel-slide">
                    <img src="{{ asset('images/bbtc3.jpg') }}" alt="Pessoas lendo livros">
                    <div class="carousel-text">
                        <h2>Conectando pessoas e histórias</h2>

                    </div>
                </div>
            </div>


            <button class="carousel-btn prev-btn">&#10094;</button>
            <button class="carousel-btn next-btn">&#10095;</button>
        </div>
    </div>

    <!-- Seção Sobre -->
    <div class="home-section section-2">
        <div class="container">
            <h2>Sobre a Biblioteca</h2>
            <p>
                A Biblioteca do Senhor Raimundo é um espaço acolhedor para leitores e estudantes, com uma coleção vasta e variada.
                Nosso objetivo é proporcionar um ambiente de aprendizado e cultura para a comunidade.
            </p>
        </div>
    </div>
@endsection
