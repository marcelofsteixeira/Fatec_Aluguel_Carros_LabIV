<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larag-on-Wheels</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("{{ asset('img/car.jpg')}}");
                background-color: #FE2E2E;
                background-position: center;
                background-repeat: no-repeat; 
                background-size: cover;
                color: #FE2E2E;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                color: #000000;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="background-color:blue;">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="background-color:green;">Login</a>
                        <a href="{{ route('register') }}" style="background-color:red;">Cadastrar</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="-webkit-text-stroke: 2px black;">
                    <strong>Larag-on-Wheels</strong>
                </div>

                <div class="links">
                    <a href="https://github.com/marcelofsteixeira/Fatec_Aluguel_Carros_LabIV" target="_blank" style="background-color:grey;"><strong style="color:white;">Repositório da Aplicação</strong></a>
                </div>
            </div>
        </div>
    </body>
</html>
