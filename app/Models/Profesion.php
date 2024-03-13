<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $table='profesions';

    protected $fillable=['nombre'];
    use HasFactory;

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
