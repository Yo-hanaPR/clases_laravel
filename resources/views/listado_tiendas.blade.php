<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Rif</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>

        @foreach($tiendas as $tienda)
            <tr>
                <td>{{$tienda['nombre']}}</td>
                <td>{{$tienda['rif']}}</td>
                <td>{{$tienda['direccion']}}</td>
                <td>
                    <button type="button"><a href="{{route('autores.edit', ['autore' => $autor['id']])}}">EDITAR</a></button>
                    <button type="button"><a href="{{route('autores.show', ['autore' => $autor['id']])}}">VER</a></button>
                    
                    <form action="{{route('autores.update',['autore'=>$autor['id']])}}" method="post">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit">ELIMINAR</button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
</body>
</html>