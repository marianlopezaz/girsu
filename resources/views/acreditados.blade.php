@extends('layouts.app')

@section('content')
<center>
<h1>
Acreditados
</h1>
</center>
<?php
require '../vendor/autoload.php';
require '../excelData.php' //CODIGO QUE TRAE LA DATA DEL EXCEL;
?>
<center>
<table border=1>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>MAIL</th>
    <th>TIPO</th>
    <th>TELEFONO</th>
    <th>DNI</th>
    <th>COMPAÑIA</th>
    <th>TRABAJO</th>
    <th colspan=2>IMPRIMIR</th>
    
    <tr>
        <?php
        /** @var ListEntry */
foreach ($listFeedAcreditados->getEntries() as $entry) {
    $representative = $entry->getValues();
        ?>
        <td><?php echo $representative['firstname'] ?></td>
        <td><?php echo $representative['lastname'] ?></td>
        <td><?php echo $representative['email'] ?></td>
        <td><?php echo $representative['tickettype'] ?></td>
        <td><?php echo $representative['cellphone'] ?></td>
        <td><?php echo $representative['dni'] ?></td>
        <td><?php echo $representative['company'] ?></td>
        <td><?php echo $representative['jobtitle'] ?></td>
        <td><button>CREDENCIAL</button></td>
        <td><button>CERTIFICADO</button></td>
    </tr>
    <?php
    }
    ?>
</table>
</center>
@endsection
