<form action="{{route('autores.store')}}" method="post">
@csrf

    <input type="text" name="nombre" placeholder="Introduce tu nombre">
    
    <input type="text" name="apellido" placeholder="Introduce tu apellido">
    
    <input type="text" name="email" placeholder="Introduce tu email">
    
    <input type="text" name="teléfono" placeholder="Introduce tu teléfono"> 

    
    <button type="submit">
        ENVIAR
    </button>
</form>