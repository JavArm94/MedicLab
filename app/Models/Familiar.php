<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    use HasFactory;

    public function idUsuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function idParentesco(){
        return $this->belongsTo(Parentesco::class);
    }

    public function idGenero(){
        return $this->belongsTo(Genero::class);
    }
    
}
