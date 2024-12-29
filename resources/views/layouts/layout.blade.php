<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07cf0d499c.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <div class="container " id="nav-container">
        <nav class="navbar navbar-expand-lg fixed-top ">
            <img class="logo" src="{{asset("images/logo.png")}}" alt="">
            <a href="#" class="navbar-brand">
                Livraria do roberto
            </a>
            <div class=" collapse navbar-collapse justify-content-end" id="navbar-links">
                <div class="navbar-nav">
                    <a href="{{ route('site.home') }}"
                       class="nav-item nav-link {{ (Route::current()->getName() === 'teste' ? 'active' : '') }}"
                       id="home-menu">Home</a>
                    <a href="{{ route('site.cadastro') }}"
                       class="nav-item nav-link {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}"
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

@

<footer class="footer mt-auto border-top">
    <div class="container ">
        <div class=" footert d-flex flex-wrap justify-content-between align-items-center ">
            <div class="col-md-4 d-flex align-items-center">
                <div><img class="logo-footer" src="{{asset("images/logobranco.png")}}" alt=""></div>
                <span class="mb-3 mb-md-0 text-white fs-6">&copy; 2024 Roberto, Inc</span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-twitter fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-instagram fa-2x"></i></a></li>
                <li class="ms-3"><a class="text-white" href="#"><i class="fa-brands fa-facebook fa-2x"></i></a></li>
            </ul>
        </div>
    </div>
</footer>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
