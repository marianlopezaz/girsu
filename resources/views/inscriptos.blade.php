@extends('layouts.app')

@section('content')
    <center>
        <div class="montserrat bienvenido">Bienvenido {{$user}}</div>
        <!--NavBar-->
        <div class="container-fluid my-4">
            <div class="row">
                <div class="col-md-2">
                    <div class="card paddingYB">
                        <div class="card-body">
                            <ul class="navbar-nav navegacion">
                                <li class="nav-item py-2 nunito"><a class="nav-link" href="{{ url('/home') }}"><span class="fas fa-user-check iconosHome"></span> Acreditados</a></li>
                                <li class="nav-item py-2 nunito active inscriptosI"><a class="nav-link" href="#"><span class="fas fa-users iconosHome"></span> Inscriptos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 m-4">
                    TABLA INSCRIPTOS
                </div>
            </div>
        </div>
    </center>
@endsection