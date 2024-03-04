<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        @section('navegacion')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/oferta-especial.png') }}" alt="CholloOfertas" height="40">
                    CholloOfertas
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nuevos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Destacados</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
        <footer class="footer mt-auto py-3 bg-light">
            <div class="container">
                <span class="text-muted">©CholloOfertas 2024</span>
            </div>
        </footer>
        @show

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>
