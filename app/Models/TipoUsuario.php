<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    use HasFactory;
  
    public function idUsuario(){
        return $this->hasMany(Usuario::class,'idUsuario');
    }

    public function idNotificacion(){
        return $this->hasMany(Nofificacion::class,'idNotificacion');
    }
}
