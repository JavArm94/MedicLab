<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificacionCertificado extends Model
{
    use HasFactory;

    public function idNotificacion(){
        return $this->belongsTo(Notificacion::class,'idNotificacion');
    }

    public function idCertificado(){
        return $this->belongsTo(Certificado::class,'idCertificado');
    }
    
}
