<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>II Congreso Internacional GIRSU</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('GIRSU.ico') }}">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
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
                    <div class="links navbar-nav ml-md-auto">
                        @auth
                            <a class="home" href="{{ url('/home') }}"><span class="fas fa-home"></span></a>
                        @else
                            <a id="insesion" href="{{ route('login') }}">Iniciar Sesión</a>
                            @if (Route::has('register'))
                                <a id="reg" href="{{ route('register') }}">Registrarse</a>
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

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
