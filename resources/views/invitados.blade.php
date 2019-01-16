@extends('layouts.app')

@section('content')
<center>
<h1>
INVITADOS
</h1>

<table border=1>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>DNI</th>
    <th>EMAIL</th>
    <th>TELEFONO</th>
    <th>TIPO</th>
    <th>COMPAÑIA</th>
    <th>TRABAJO</th>
    <th colspan=2>IMPRIMIR</th> 
    @foreach($invitados as $invitado)

    <?php $dato=$invitado->getValues()?>
    <tr>
    <td>{{$dato['firstname']}}</td> 
    <td>{{$dato['lastname']}}</td>    
    <td>{{$dato['dni']}}</td>    
    <td>{{$dato['email']}}</td>    
    <td>{{$dato['cellphone']}}</td>    
    <td>{{$dato['tickettype']}}</td> 
    <td>{{$dato['company']}}</td>  
    <td>{{$dato['jobtitle']}}</td>
    <td><button>CREDENCIAL</button></td>
    <td><button>CERTIFICADO</button></td>      
    </tr>
    @endforeach
   
</table>
@endsection
