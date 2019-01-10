@extends('layouts.app')

@section('content')
<center>
<h1>
Bienvenido {{$user}}
</h1>
<br><br>
<form>
<input type="button" class="btn btn-info" value="Imprimir Certificado"> <br> <br>
<input type="button" class="btn btn-info" value="Imprimir Credencial"> <br> <br>
<input type="button" class="btn btn-info" value="Asistencia"> 

</form>
</center>


@endsection
