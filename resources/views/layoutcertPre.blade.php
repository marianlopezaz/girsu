<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado de {{ $participante-> nombre }} {{ $participante-> apellido }}</title>
    <link rel="stylesheet" href="css/layoutcertPre.css">
</head>
<body>
    <div id="campos">
        <div id="nombre">{{ $participante-> nombre }} {{ $participante-> apellido }}</div>
        <div id="dni">{{ $participante-> dni }}</div>
        <div id="caracter">{{ $participante-> ticket_type }}</div>
    </div>
    <script type="text/javascript"> try { this.print(); } catch (e) { window.onload = window.print; } </script>
</body>
</html>