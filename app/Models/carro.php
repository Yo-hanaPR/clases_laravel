<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    use HasFactory;

    protected $table='carros';

    protected $fillable= [
        'placa',
        'caballos',
        'id_tienda'
    ];

    /**
     * un carro puede ser vendido en una sola tienda. DERECHO
     * Varias tiendas pueden vender varios carros.  ALREVES/ INVERSA
     */

    public function tiendas(){
        
        return $this->
    }
}
