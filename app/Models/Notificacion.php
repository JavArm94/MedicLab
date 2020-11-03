<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    public function idNotificacionCertificado(){
        return $this->hasMany(NotificacionCertificado::class);
    }

    public function idTipoUsuario(){
        return $this->belongsTo(TipoUsuario::class);
    }

    public function idUsuario(){
        return $this->belongsTo(Usuario::class);
    }
}
