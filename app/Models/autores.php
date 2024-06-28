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

}
