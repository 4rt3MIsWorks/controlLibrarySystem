<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'pagina teste')</title>
    <link rel="shortcut icon" href="{{ asset('images/livroFavicon.ico') }}" type="image/x-icon">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/07cf0d499c.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <header>
        <div class="container " id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top ">
                <img class="logo" src="{{asset("images/logo.png")}}" alt="">
                <a href="#" class="titulo navbar-brand">
                    Livraria do roberto
                </a>
                <div class=" collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="{{ route('site.home') }}"
                           class="nav-item nav-link {{ (Route::current()->getName() === 'teste' ? 'active' : '') }}"
                           id="home-menu">Home</a>
                        <a href="{{ route('site.cadastro') }}"
                           class="nav-item nav-link {{ (Route::current()->getName() === 'site.register.cadastro' ? 'active' : '') }}"
                           id="cadastro-menu">Cadastro</a>
                        <a href="#"
                           class="nav-item nav-link {{ (Route::current()->getName() === 'site.listagem' ? 'active' : '') }}"
                           id="listagem-menu">Listagem</a>
                        <a href="#"
                           class="nav-item nav-link {{ (Route::current()->getName() === 'site.sobre' ? 'active' : '') }}"
                           id="sobre-menu">Emprestimos</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="cabecaSecao">
            <h3 class="titulo text-white ">Bem vindo!</h3>
        <p class="text-white subTitulo">Abaixo as opções de cadastro:</p>
        </div>
            <div class="d-inline-flex gap-3">
            <div class="card p-5 w-75 cadastrar aluno">
                <div class="cardImg">
                    <img src="{{ asset('') }}" alt="">
                </div>
                <div class="cardText">

                </div>
                <div class="btnCard">
                    <a href="">Estudantes</a>
                </div>
            </div>

            <div class="card p-5 w-75 cadastrar livro">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cupiditate delectus distinctio
                doloremque expedita, labore libero nemo nesciunt nisi obcaecati perspiciatis possimus quasi quis
                recusandae, sed soluta temporibus vitae voluptatibus!
            </div>
            <div class="card p-5 w-75 cadastrar autor">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dolor dolorum eum, illo maiores
                minus, nobis, perferendis quaerat quam quisquam suscipit tempora unde veniam? Architecto maxime minus
                nihil rerum veritatis?
            </div>
        </div>
    </div>

    <footer class="footer mt-auto border-top">
        <div class="container ">
            <div class=" footert d-flex flex-wrap justify-content-between align-items-center ">
                <div class="col-md-4 d-flex align-items-center">
                    <div><img class="logo-footer" src="{{asset("images/logobranco.png")}}" alt=""></div>
                    <span class="mb-3 mb-md-0 text-white fs-6">&copy; 2024 Roberto, Inc</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    </li>
                    <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
