<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autores extends Model
{
    use HasFactory;

    protected $table='autores';


    protected $fillable=[ /* Array con campos LLENABLES de la tabla de base de datos */
        'nombre',
        'apellido',
        'email',
        'telefono'
    ];

    /***
     * 
     * línea 30: Propiedad dinámica del modelo AUTORES. 
     * Puedes acceder a esta propiedad desde tinker o desde tu controlador para retornar en este caso los libros que le pertenecen a un autor en especifico
     * Recuerda que solo puedes acceder a la propiedad dinámica desde UNA INSTANCIA DEL MODELO, es decir, desde el resultado de la funcion ->first() 
     * 
     * Ejemplo: Autores::where('id','1')->first()->libros
     */
    public function libros(){

        return $this->hasMany(Libros::class, 'id_autor'); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }
}
