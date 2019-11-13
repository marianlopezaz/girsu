<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificados</title>
    <link rel="stylesheet" href="css/layoutcertGral.css">
</head>
<body>
    <?php $__currentLoopData = $participantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $participante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="campos">
            <div id="nombre"><?php echo e($participante-> nombre); ?> <?php echo e($participante-> apellido); ?></div>
            <div id="dni"><?php echo e($participante-> dni); ?></div>
            <div id="caracter"><?php echo e($participante-> ticket_type); ?></div>
        </div>
        <div class="pagebreaker"></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script type="text/javascript"> try { this.print(); } catch (e) { window.onload = window.print; } </script>
</body>
</html>