@extends('layouts.app')

@section('content')
    <center>
    <?php
        require '../vendor/autoload.php';
        require '../excelData.php'; //CODIGO QUE TRAE LA DATA DEL EXCEL;
    ?>
        <div class="montserrat bienvenido">Bienvenido {{$user}}</div>
        <!--NavBar-->
        <div class="container-fluid my-4">
            <div class="row">
                <div class="col-md-2">
                    <div class="card paddingYB">
                        <div class="card-body">
                            <ul class="navbar-nav navegacion">
                                <li class="nav-item py-2 active nunito"><a class="nav-link" href="{{ url('/home') }}"><span class="fas fa-user-check iconosHome"></span> Acreditados</a></li>
                                <li class="nav-item py-2 nunito inscriptos"><a class="nav-link" href="{{ url('/inscriptos') }}"><span class="fas fa-users iconosHome"></span> Inscriptos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <table class='table table-hover table-responsive monserrat'>
                        <thead class="thead-dark">
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>MAIL</th>
                                <th>TIPO</th>
                                <th>TELEFONO</th>
                                <th>DNI</th>
                                <th>COMPAÑIA</th>
                                <th>TRABAJO</th>
                                <th colspan=2>IMPRIMIR</th>
                            </tr>
                        </thead>

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
                                <td><button class="btn btn-girsu">CREDENCIAL</button></td>
                                <td><button class="btn btn-girsu">CERTIFICADO</button></td>
                            </tr>
                            <?php
                            }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </center>
@endsection
