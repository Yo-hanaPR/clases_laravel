
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
    <!--
    DOCUMENTACION DE BOOTSTRAP
https://getbootstrap.com/docs/5.3/getting-started/introduction/
    -->

    <button><a href="{{route('autores.create')}}">  AÑADIR NUEVO <a></button>


    @if(session()->has('success'))
        <div class="alert alert-success"> {{ session()->get('success')}}</div>
    @endif
<table border="1">

<tr>
<th>NOMBRE</th>
<th>APELLIDO</th>
<th>email</th>
<th>Teléfono</th>    
<th>Acciones</th>    
</tr>
@foreach($autores as $autor)

<tr>
    <td>{{$autor['nombre']}}</td>
    <td>{{$autor['apellido']}}</td>
    <td>{{$autor['email']}}</td>
    <td>{{$autor['teléfono']}}</td>
    <td>
        <button type="button"><a href="{{route('autores.edit', ['autore' => $autor['id']])}}">EDITAR</a></button>
        <button type="button"><a href="{{route('autores.show', ['autore' => $autor['id']])}}">VER</a></button>
        <button type="button">ELIMINAR</button>
    </td>
    
<tr>
@endforeach 

</table>


    
</body>
</html>