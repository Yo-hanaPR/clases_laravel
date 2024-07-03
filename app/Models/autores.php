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

    public function libros(){
        return $this->hasMany(Libros::class, 'id_autor'); 
         /**
          * 
            * $this->hasMany(Libros::class, 'id_FORANEO_DE_LA_OTRA_TABLA', 'ID_DE_ESTA_TABLA'); 
          */
    }
}
