<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- LINK PARA AGREGAR BOOTSTRAP POR CDN-->
    <title>Document</title>
</head>
<body>

    <ul>
        @foreach($clientes as $cliente)
            @if ($cliente['activo']) <li>{{$cliente['name']}} {{$cliente['apellido']}}</li>
            @else <li>{{$cliente['name']}} {{$cliente['apellido']}} Esta inactivo </li> 
            @endif

            @endforeach 
        </ul>
        Hay {{$clientes_total}} clientes registrados
         

</body>
</html>