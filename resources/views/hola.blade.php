<h1>
    Hola mundo
</h1>


@foreach ($lista as $item)
    <p>{{$item}}</p>    
@endforeach

@foreach ($users as $user)
    <p>{{$user['name']}} - {{$user['email']}}</p>    
@endforeach



@foreach ($products as $product)
    <p>{{$product['name']}}</p>
    <ul>

        @foreach ($product['specs'] as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    
@endforeach

<h1>Funciones de suma</h1>



<form action="{{route('store')}}" method="post">
    @csrf
    <input type="text" name="name_persona" placeholder="nombre">
    <input type="text" name="apellido_persona" placeholder="apellido">
    <input type="text" name="edad" placeholder="apellido">

    <input type="submit" value="ENVIAR">
</form>