$(function() {
    var funcionesHome = {};
        (function(app){
            app.init = function(){
                $.noConflict();
                app.dataTable();
                app.bindings();
            }
            
            app.dataTable = function() {
                $('#tableParticipantes').DataTable({
                responsive: true,
                language: {
                    url: 'js/DataTables/Spanish.json', 
                    searchPlaceholder: 'Buscar Participante..'
                },
                processing: true,
                serverSide: true,
                aaSorting: [],
                ajax: {
                    url: $('#tableParticipantes').data('route'),
                },
                columns: [
                    {data: 'eventbrite_id', name: 'eventbrite_id'},
                    {data: 'nombre', name: 'nombre' },
                    {data: 'apellido', name: 'apellido', responsivePriority: 2 },
                    {data: 'dni', name: 'dni', responsivePriority: 1},
                    {data: 'ticket_type', name: 'ticket_type'},
                    {data: 'mail', name: 'mail'},
                    {data: 'Acciones',
                        "orderable": false,
                        "searchable": false,
                        "render": function (data, type, row, meta){
                            var a = "   <button class='btn btn-link btn-mail' data-id_participante='"+ row.eventbrite_id +"'>Enviar por mail</button>"+                         
                                    "   <button class='btn btn-link impresionButton' data-id_participante='"+ row.eventbrite_id +"'>Imprimir certificado</button>"
                            return a;
                        }
                    }
                ]
            });
            }
            
            app.bindings = function(){
                
                $('#enviarEmail').on('click', function(){
                    app.sendMailIndividual($('#eventbrite_id').attr("value"));
                    $('#mailConfirm').modal('hide');
                    $('#mailWait').modal({show:true});
                })
                
                $('#tbodyParticipantes').on('click', '.btn-mail', function(){
                    $('#mailConfirm').modal({show:true});
                    $('#eventbrite_id').val($(this).attr("data-id_participante"));
                });
                
                $('#selecTodosImp').on('click', function(){
                    $('input:checkbox').not(this).prop('checked', this.checked);
                });
                $('#selecTodosMail').on('click', function(){
                    $('input:checkbox').not(this).prop('checked', this.checked);
                });
                $('div.alert').delay(5000).slideUp(500);
            
            }
            
            app.sendMailIndividual = function(id){
                $.ajax({
                    url: "/certificadoVirtual",
                    type: 'POST',
                    data: {id: id, _token: $('#signup-token').val()},
                    dataType: 'json',
                    success: function(res){
                        var alert = '<div class="alert alert-primary">'+
                                        'Email Enviado Correctamente' +
                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                                        '<span aria-hidden="true">&times;</span>' +
                                        '</button>' +
                                    '</div>' ;
                        $('#mailWait').modal('hide');
                        $('#alertSuccess').html(alert);
                    },
                    error: function(res){
                        console.log(res);
                    }   
                         
                })
                
            }
            app.init();
            
        })(funcionesHome);
});