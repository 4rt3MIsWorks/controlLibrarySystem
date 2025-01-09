<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'biblioteca Sr. Raimundo' )</title>
    <link rel="shortcut icon" href="{{ asset('images/livroFavicon.ico') }}" type="image/x-icon">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@300;400;700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/07cf0d499c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="container " id="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top ">
                <img class="logo" src="{{asset("images/logo.png")}}" alt="">
                <a href="#" class="titulo navbar-brand">
                    Biblioteca do Senhor Raimundo
                </a>
                <div class=" collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a href="#"
                           class="nav-item nav-link {{ (Route::current()->getName() === 'teste' ? 'active' : '') }}"
                           id="home-menu">Home</a>
                        <a href="{{ route('site.cadastro')  }}"
                           class="nav-item nav-link {{ (Route::current()->getName() === 'site.cadastro' ? 'active' : '') }}"
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


    @section('main')
    @show

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

</body>
</html>
