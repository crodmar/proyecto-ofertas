<html>
    <head>
        <title>@yield('title')</title>
        <style>
            .navegacion {
                background-color: #333; /* Color de fondo */
                color: white; /* Color del texto */
                padding: 10px; /* Espacio interno */
                font-family: Arial, sans-serif; /* Fuente del texto */
            }

            .navegacion img {
                width: 50px; /* Ancho de la imagen */
                height: auto; /* Altura automática proporcional */
                margin-right: 10px; /* Margen derecho */
                vertical-align: middle; /* Alineación vertical */
            }

            .navegacion a {
                color: white;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        @section('navegacion')
        <div class="navegacion">
            <img src="{{ asset('img\oferta-especial.png') }}" alt="description of myimage">CholloOfertas
            <a href="">Inicio</a>
            <a href="">Nuevos</a>
            <a href="">Destacados</a>
        </div>
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
        <div class="navegacion">
            ©CholloOfertas 2024
        </div>
        @show
    </body>
</html>
