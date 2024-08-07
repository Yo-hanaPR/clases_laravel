<x-app-layout>
    <x-slot name="header">
        @if(session()->has('success'))
        <div class="alert alert-success"> {{ session()->get('success')}}</div>
    @endif

    @if(session()->has('updated'))
        <div class="alert alert-danger"> {{ session()->get('updated')}}</div>
    @endif

    @if(session()->has('eliminado'))
        <div class="alert alert-warning"> {{ session()->get('eliminado')}}</div>
    @endif
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
                    <button type="button"><a href="{{route('tiendas.edit', ['tienda' => $tienda['id']])}}">EDITAR</a></button>
                    <button type="button"><a href="{{route('tiendas.show', ['tienda' => $tienda['id']])}}">VER</a></button>
                    
                    <form action="{{route('tiendas.update',['tienda'=>$tienda['id']])}}" method="post">
                        @method('DELETE')
                        @csrf
                        
                        <button type="submit">ELIMINAR</button>
                    </form>
                </td>
            </tr>
        @endforeach
       
    </table>
    <button><a href="{{route('tiendas.create')}}">  AÑADIR NUEVO <a></button>   
    </x-slot>
            
   </x-app-layout>