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
}
