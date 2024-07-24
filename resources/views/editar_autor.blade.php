<form action="{{route('autores.update',['autore'=>$autor['id']])}}" method="post">
@method('PUT')
@csrf

<small>La ruta autores.update necesita un parametro llamado AUTORE. Se lo debes pasar.
    Además en el formulario de ACTUALIZACION de datos debes llamar al metodo @method('PUT') ya que 
    los formularios de HTML no permiten hacer peticiones directamente con los verbos PUT y DELETE.. 
    Los formularios HTML hacen peticiones POST. Pero Laravel puede indicar que la petición será de tipo PUT, o DELETE 
    usando la directiva @ method('PUT') o @ method('DELETE') respectivamente.
</small>
    <input type="text" name="nombre" placeholder="Introduce tu nombre" value="{{$autor['nombre']}}">
    
    <input type="text" name="apellido" placeholder="Introduce tu apellido" value="{{$autor['apellido']}}">
    
    <input type="text" name="email" placeholder="Introduce tu email" value="{{$autor['email']}}">
    
    <input type="text" name="teléfono" placeholder="Introduce tu teléfono" value="{{$autor['teléfono']}}"> 

    
    <button type="submit">
        ENVIAR
    </button>
</form>