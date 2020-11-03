<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
  
    public function idUsuario(){
        return $this->hasMany(Usuario::class);
    }

    public function idNofificacion(){
        return $this->hasMany(Nofificacion::class);
    }
}
