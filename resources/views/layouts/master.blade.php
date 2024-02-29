<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('navegacion')
            <img src="{{ asset('img\oferta-especial.png') }}" alt="description of myimage">CholloOfertas
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
