<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mi blog</title>
</head>
<body>
     <h1>Pantalla de contacto</h1>

     <li><a href="{{ route('index')}}">
     Retornar</a></li>

     <p>Nombre: {{ $nombre }}</p>
     <p>Apellido: {{ $apellido }}</p>
     <p>Tel: {{ $tel }}</p>
     <p>Correo: {{ $mail }}</p>
</body>
</html>