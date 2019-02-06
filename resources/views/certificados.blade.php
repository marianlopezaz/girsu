@extends('layouts.app')

@section('content')
<center>
<h1>
Impresion de Certificados
</h1>
<br><br>
<form action="/api/certificadoVirtual/1" method="post">
    {{-- {{ csrf_field() }} --}}

    <input type="submit" value="Enviar certificado Virtual" 
         name="Submit" id="frm1_submit"/>
</form>
<form action="/api/certificadoPre/1" method="post" style="margin-top:10px;">
    {{-- {{ csrf_field() }} --}}

    <input type="submit" value="Imprimir Certificado Pre-impreso" 
         name="Submit" id="frm1_submit"/>
</form>
</center>

@endsection
