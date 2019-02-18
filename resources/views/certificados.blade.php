@extends('layouts.app')

@section('content')

<center>
    <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
    <div class="mx-5 my-1" id="alertSuccess">
    
    </div>
    <h1>
    Impresion de Certificados
    </h1>
    <br><br>
    <button class="btn btn-girsu" data-toggle='modal' data-target='#impresionGral'>Imprimir Certificados</button>
    <button class="btn btn-girsu" data-toggle='modal' data-target='#mailGral'>Enviar Emails</button>
    <div class="container-fluid col-md-10">
        <table id="tableParticipantes" class="table table-hover dt-responsive nowrap table-sm" data-route="{{Route('datatable.participantes')}}"> 
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th data-priority="2">Apellido</th>
                <th data-priority="1">Dni</th>
                <th>Tipo</th>
                <th>Mail</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody id="tbodyParticipantes">

            </tbody>
        </table>
    </div>
    <div class="modal fade" aria-hidden="true" id="mailWait">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h6>Espere mientras se envia el mail</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" aria-hidden="true" id="mailConfirm">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>Esta seguro que desea envia el email?</h6>
                    <input type="hidden" id="eventbrite_id" value="">
                </div>
                <div class="modal-footer">
                    <button class="btn" id="enviarEmail">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" aria-hidden="true" id="impresionGral">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Seleccione Participantes</h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="checkbox" class="form-check-input" id="selecTodosImp"> Seleccionar Todos<br><hr>
                    <form action="/api/impresionGral" method="post">
                        @foreach ( $participantes as $participante )
                            <div class="form-check my-2 border-bottom">
                                <input type="checkbox" class="form-check-input" id="checkParticipante{{ $participante->eventbrite_id }}" name="check_impresion[]" value="{{ $participante->eventbrite_id }}">
                                <label class="form-check-label" for="checkParticipante{{ $participante->eventbrite_id }}"><span class="font-weight-bold">Nombre: </span>{{ $participante->nombre }}</label><br>
                                <label class="form-check-label" for="checkParticipante{{ $participante->eventbrite_id }}"><span class="font-weight-bold">Apellido: </span>{{ $participante->apellido }}</label><br>
                                <label class="form-check-label" for="checkParticipante{{ $participante->eventbrite_id }}"><span class="font-weight-bold">Dni: </span>{{ $participante->dni }}</label>
                            </div>
                        @endforeach
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-girsu">Imprimir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" aria-hidden="true" id="mailGral">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Seleccione Participantes</h5> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="checkbox" class="form-check-input" id="selecTodosMail"> Seleccionar Todos<br><hr>
                    <form action="/api/mailGral" method="post">
                        @foreach ( $participantes as $participante )
                            <div class="form-check my-2 border-bottom">
                                <input type="checkbox" class="form-check-input" id="checkParticipante{{ $participante->eventbrite_id }}" name="check_mail[]" value="{{ $participante->eventbrite_id }}">
                                <label class="form-check-label" for="checkParticipante{{ $participante->eventbrite_id }}"><span class="font-weight-bold">Nombre: </span>{{ $participante->nombre }}</label><br>
                                <label class="form-check-label" for="checkParticipante{{ $participante->eventbrite_id }}"><span class="font-weight-bold">Apellido: </span>{{ $participante->apellido }}</label><br>
                                <label class="form-check-label" for="checkParticipante{{ $participante->eventbrite_id }}"><span class="font-weight-bold">Dni: </span>{{ $participante->dni }}</label>
                            </div>
                        @endforeach
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-girsu">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</center>

@endsection

@section('script')
    <script src="{{ asset('js/jsFiles/impresion.js') }}"></script>
@endsection
