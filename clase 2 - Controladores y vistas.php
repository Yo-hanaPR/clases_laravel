//controladores

crear controlador: 
php artisan make:nombreControlador --resource (resource crea funciones de CRUD)

funciones del controlador: 
public function nombreFuncion(){}

Paso de variables a la vista en el controlador
$variable='valor';

return view('nombreVista', compact('variable'));


Imprimir variables en la vista {{$variable}}

Imprimir arrays en la vista:
@foreach($nombreArray as $item)
    {{$item['propiedad-1']}} - 
    {{$item['propiedad-2']}}
@endforeach

Condicionales en la vista.
@if(2==2)
    <div class="alert alert-danger">
       Es 4
    </div>
@endif 

