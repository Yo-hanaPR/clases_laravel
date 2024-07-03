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

    public function autor(){
        return $this->belongsTo(Autores::class, 'id_autor', 'id');
        /**
         * 
         * 
         *return $this->belongsTo(Autores::class, 'ID_DE_ESTA_TABLA', 'ID_DE_LA_OTRA_TABLA');
         */
    }
    public function tiendas(){
        return $this->belongsToMany(tiendas::class,"libro_tiendas","id_tienda","id_libro"); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }
}
