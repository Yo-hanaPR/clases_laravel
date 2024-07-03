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

    public function libros(){
        return $this->belongsToMany(libros::class,"libro_tiendas","id_tienda","id_libro"); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }
}
