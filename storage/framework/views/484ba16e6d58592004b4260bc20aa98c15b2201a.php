<?php $__env->startSection('content'); ?>

<center>
    <input id="signup-token" name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
    <div class="mx-5 my-1" id="alertSuccess">
    
    </div>
    <h1>
    Impresion de Certificados
    </h1>
    <br><br>
    <button class="btn btn-girsu" data-toggle='modal' data-target='#impresionGral'>Imprimir Certificados</button>
    <button class="btn btn-girsu" data-toggle='modal' data-target='#mailGral'>Enviar Emails</button>
    <div class="container-fluid col-md-10">
        <table id="tableParticipantes" class="table table-hover dt-responsive nowrap table-sm" data-route="<?php echo e(Route('datatable.participantes')); ?>"> 
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
                        <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check my-2 border-bottom">
                                <input type="checkbox" class="form-check-input" id="checkParticipante<?php echo e($participante->eventbrite_id); ?>" name="check_impresion[]" value="<?php echo e($participante->eventbrite_id); ?>">
                                <label class="form-check-label" for="checkParticipante<?php echo e($participante->eventbrite_id); ?>"><span class="font-weight-bold">Nombre: </span><?php echo e($participante->nombre); ?></label><br>
                                <label class="form-check-label" for="checkParticipante<?php echo e($participante->eventbrite_id); ?>"><span class="font-weight-bold">Apellido: </span><?php echo e($participante->apellido); ?></label><br>
                                <label class="form-check-label" for="checkParticipante<?php echo e($participante->eventbrite_id); ?>"><span class="font-weight-bold">Dni: </span><?php echo e($participante->dni); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="form-check my-2 border-bottom">
                                <input type="checkbox" class="form-check-input" id="checkParticipante<?php echo e($participante->eventbrite_id); ?>" name="check_mail[]" value="<?php echo e($participante->eventbrite_id); ?>">
                                <label class="form-check-label" for="checkParticipante<?php echo e($participante->eventbrite_id); ?>"><span class="font-weight-bold">Nombre: </span><?php echo e($participante->nombre); ?></label><br>
                                <label class="form-check-label" for="checkParticipante<?php echo e($participante->eventbrite_id); ?>"><span class="font-weight-bold">Apellido: </span><?php echo e($participante->apellido); ?></label><br>
                                <label class="form-check-label" for="checkParticipante<?php echo e($participante->eventbrite_id); ?>"><span class="font-weight-bold">Dni: </span><?php echo e($participante->dni); ?></label>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-girsu">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</center>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('js/jsFiles/impresion.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>