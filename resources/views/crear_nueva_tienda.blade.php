<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <form action="{{route('tiendas.store')}}" method="post">
            @csrf
        
            <input type="text" name="nombre" placeholder="Nombre de la tienda">
            
            <input type="text" name="rif" placeholder="Rif de la tienda">
            
            <input type="text" name="direccion" placeholder="Direccion de la tienda">
            
            
            <button type="submit">
                ENVIAR
            </button>
        </form>
    </x-slot>

   

</x-app-layout>


