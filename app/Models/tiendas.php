<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiendas extends Model
{
    use HasFactory;
    protected $table='tiendas';


    protected $fillable=[ /* Array con campos LLENABLES de la tabla de base de datos */
        'nombre',
        'rif',
        'direccion'
        
    ];

    /***
     * 
     * línea 29: Propiedad dinámica del modelo TIENDAS. 
     * Puedes acceder a esta propiedad desde tinker o desde tu controlador para retornar en este caso los libros que son vendidos en una tienda en especifico.
     * Recuerda que solo puedes acceder a la propiedad dinámica desde UNA INSTANCIA DEL MODELO, es decir, desde el resultado de la funcion ->first() 
     * 
     * Ejemplo: Tiendas::where('id','1')->first()->libros
     */
    public function libros(){
        return $this->belongsToMany(libros::class,"libro_tiendas","id_tienda","id_libro"); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }
}
