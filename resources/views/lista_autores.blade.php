
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
<ul>
@foreach($autores as $autor)
    <li>{{$autor['name']}} {{$autor['apellido']}}</li>
@endforeach 
</ul>

@if($condicion)
 <h1>ES SIETE</h1> 
@else 
<h1>No es siete</h1>
@endif 

<ul>
    @foreach($products as $product)
        <li>
            {{$product['nombre']}}
        </li>
        <li>{{$product['precio']}}

        </li>
        <ul>
            @foreach($product['specs'] as $spec)
                <li> {{$spec}}</li>
            @endforeach
        </ul>
    @endforeach
</ul>


    
</body>
</html>