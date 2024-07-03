<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro_tiendas extends Model
{
    use HasFactory;

    protected $table='libro_tiendas';


    protected $fillable=[ /* Array con campos LLENABLES de la tabla de base de datos */
        'id_libro',
        'id_tienda'
        
    ];

    public function libros(){
        return $this->hasMany(Libros::class, 'id_autor'); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }


}
