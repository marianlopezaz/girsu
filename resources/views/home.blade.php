@extends('layouts.app')

@section('content')
    <center>
        <div class="montserrat bienvenido">Bienvenido {{$user}}</div>
        <form>
            <input type="button" class="btn btn-info" value="Imprimir Certificado">
            <input type="button" class="btn btn-info" value="Imprimir Credencial"> 
            <input type="button" class="btn btn-info" value="Asistencia">   
        </form>
    </center>
@endsection
