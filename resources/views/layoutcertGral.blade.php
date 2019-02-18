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
    @foreach($participantes as $participante)
        <div id="campos">
            <div id="nombre">{{ $participante-> nombre }} {{ $participante-> apellido }}</div>
            <div id="dni">{{ $participante-> dni }}</div>
            <div id="caracter">{{ $participante-> ticket_type }}</div>
        </div>
        <div class="pagebreaker"></div>
    @endforeach
    <script type="text/javascript"> try { this.print(); } catch (e) { window.onload = window.print; } </script>
</body>
</html>