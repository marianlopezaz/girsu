

<?php $__env->startSection('content'); ?>
<center>
<h1>
Bienvenido <?php echo e($user); ?>

</h1>
<br><br>
<form>
<input type="button" class="btn btn-info" value="Imprimir Certificado"> <br> <br>
<input type="button" class="btn btn-info" value="Imprimir Credencial"> <br> <br>
<input type="button" class="btn btn-info" value="Asistencia"> 

</form>
</center>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>