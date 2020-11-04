<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    public function idNotificacionCertificado(){
        return $this->hasMany(NotificacionCertificado::class,'idNotificacion');
    }

    public function idTipoUsuario(){
        return $this->belongsTo(TipoUsuario::class,'idTipoUsuario');
    }

    public function idUsuario(){
        return $this->belongsTo(Usuario::class,'idUsuario');
    }
}
