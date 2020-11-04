<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    public function idUsuario(){
        return $this->hasMany(Usuario::class,'idUsuario');
    }

    public function idFamiliar(){
        return $this->hasMany(Familiar::class,'idFamiliar');
    }
}
