Migraciones: https://laravel.com/docs/11.x/migrations#creating-columns

Crear una migracion: php artisan make:migration create_nombretabla_table

crear campos de una tabla: $table->string('nombre');

Modelos:
Crear modelo: php artisan make:model NombreModelo.php 

Propiedades por defecto del modelo: 

protected $table='autores';

    protected $fillable=[
        'nombre',
        'apellido',
        'email',
        'teléfono'
    ];

Declaracion de propiedades dinámicas del modelo para consulta de datos relacionados

public function Libros()
{
    ...
}

