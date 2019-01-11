<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>II Congreso Internacional GIRSU</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-md colorAzulFuerte">
            <a class="navbar-brand principal" href="{{ url('/') }}"><img src="{{asset('css/images/logo.png')}}" width="45" height="56"/></a>
            <a class="marca nunito principal" href="{{ url('/') }}">II Congreso Internacional GIRSU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="fas fa-bars"></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse">
                @if (Route::has('login'))
                    <div class="top-right links navbar-nav">
                        @auth
                            <a class="nav-link home" href="{{ url('/home') }}"><span class="fas fa-home"></span></a>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>

        <div class="content">
            <div class="title m-b-md nunito">
                Congreso Internacional Sobre Gestión Integral de Residuos Sólidos Urbanos
            </div>
        </div>   
        <footer class="montserrat">
            <p>
                Desarrolado por
                <a href="https://www.prolinesi.com/" target="_blank">Proline</a>
            </p>
            <ul>
                <a href="https://www.instagram.com/proline_si/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/ProLine-225185394816589/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:prolinesi4146@gmail.com" target="_blank"><i class="far fa-envelope"></i></a>
                <a href="https://www.prolinesi.com/" target="_blank"><i class="fas fa-globe"></i></a>
            </ul>
        </footer>
    </body>
</html>
