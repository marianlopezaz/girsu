@extends('layouts.app')

@section('content')
<center>
<h1>
Bienvenido
</h1>
<br><br>
<form action="/api/certificados/1" method="post">
    {{-- {{ csrf_field() }} --}}

    <input type="submit" value="Submit" 
         name="Submit" id="frm1_submit"/>
</form>
</center>


@endsection
