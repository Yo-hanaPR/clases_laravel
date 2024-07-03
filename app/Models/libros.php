<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    use HasFactory;

    protected $table='libros';


    protected $fillable=[ /* Array con campos LLENABLES de la tabla de base de datos */
        'nombre',
        'descripcion',
        'precio',
        'id_autor'
    ];

    /***
     * 
     * línea 30: Propiedad dinámica del modelo LIBROS. 
     * Puedes acceder a esta propiedad desde tinker o desde tu controlador para retornar en este caso el autor que hizo un libro en especifico.
     * Recuerda que solo puedes acceder a la propiedad dinámica desde UNA INSTANCIA DEL MODELO, es decir, desde el resultado de la funcion ->first() 
     * 
     * Ejemplo: Libros::where('id','1')->first()->autor
     */
    public function autor(){
        return $this->belongsTo(Autores::class, 'id_autor', 'id');
        /**
         * 
         * 
         *return $this->belongsTo(Autores::class, 'ID_DE_ESTA_TABLA', 'ID_DE_LA_OTRA_TABLA');
         */
    }

    /***
     * 
     * línea 47: OTRA Propiedad dinámica del modelo LIBROS. 
     * Puedes acceder a esta propiedad desde tinker o desde tu controlador para retornar en este caso las tiendas donde se vende un libro en específico.
     * Recuerda que solo puedes acceder a la propiedad dinámica desde UNA INSTANCIA DEL MODELO, es decir, desde el resultado de la funcion ->first() 
     * 
     * Ejemplo: Libros::where('id','1')->first()->tiendas
     */
    public function tiendas(){
        return $this->belongsToMany(tiendas::class,"libro_tiendas","id_tienda","id_libro"); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }
}
