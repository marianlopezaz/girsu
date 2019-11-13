<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado Virtual</title>
    <link rel="stylesheet" href="css/layoutcert.css">
</head>
<body>
    <div id="campos">
        <div id="nombre"><?php echo e($participante-> nombre); ?> <?php echo e($participante-> apellido); ?></div>
        <div id="dni"><?php echo e($participante-> dni); ?></div>
        <div id="caracter"><?php echo e($participante-> ticket_type); ?></div>
    </div>
</body>
</html>