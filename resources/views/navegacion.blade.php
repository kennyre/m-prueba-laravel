<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>To do List - Prueba FrameWork Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .active {
                text-decoration: none;
                color: green;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <header>

            <?Php 
                function activeMenu($url)
                { 
                    //No se está usando porque en las pruebas no funciona

                    return request()->is('$url') ? 'active' : '';
                }
            ?>

            <nav>
                <a 
                    class="{{ request()->is('/') ? 'active' : '' }}" 
                    href="{{ route('inicio') }}">Inicio
                </a>
                
                
                <a 
                    class="{{ request()->is('categorias/crear') ? 'active' : '' }}" 
                    href="{{ route('categorias.crear') }}">Categorías
                </a>

                <a 
                    class="{{ request()->is('categorias') ? 'active' : '' }}" 
                    href="{{ route('categorias.index') }}">Lista Categorías
                </a>


                <a 
                    class="{{ request()->is('tareas') ? 'active' : '' }}" 
                    href="{{ route('tareas') }}">Tareas
                </a>

            </nav>
        </header>


        @yield('contenido')


        <br>
        <hr>
        <footer align='center'>Copyright © {{ date('Y') }}</footer>



    </body>
</html>