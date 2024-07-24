<form action="{{route('tiendas.update',['tienda'=>$tienda['id']])}}" method="post">
    @method('PUT')
    @csrf
    
   
    
        <input type="text" name="nombre" placeholder="Introduce tu nombre" value="{{$tienda['nombre']}}">
        
        <input type="text" name="rif" placeholder="Introduce el rif de la tienda" value="{{$tienda['rif']}}">
        
        <input type="text" name="direccion" placeholder="Introduce el nombre de la tienda" value="{{$tienda['direccion']}}">
        
        
    
        
    <!--boton de tipo submit, recordar traer el @-method y el @-csrf y separar los arrobas en los comentarios-->
        <button type="submit"> 
            ENVIAR
        </button>
    </form>
    
    <x-calendar>  Calendario maya
    </x-calendar> 

   