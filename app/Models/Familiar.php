<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;

    public function idUsuario(){
        return $this->belongsTo(Usuario::class, 'idUsuario');
    }

    public function idParentesco(){
        return $this->belongsTo(Parentesco::class,'idParentesco');
    }

    public function idGenero(){
        return $this->belongsTo(Genero::class,'idGenero');
    }
    
}
