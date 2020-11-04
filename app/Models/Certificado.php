<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    public function idAuditoriaCertificado(){
        return $this->hasMany(AuditoriaCertificado::class,'idAuditoriaCertificado');
    }

    public function idNotificacionCertificado(){
        return $this->hasMany(NotificacionCertificado::class,'idNotificacion');
    }

    public function idTipoCertificado(){
        return $this->belongsTo(TipoCertificado::class,'idTipoCertificado');
    }

    public function idMedico(){
        return $this->belongsTo(Medico::class,'idMedico');
    }

    public function idPatologia(){
        return $this->belongsTo(Patologia::class,'idPatologia');
    }

    public function idUsuario(){
        return $this->belongsTo(Usuario::class,'idUsuario');
    }

    public function idFamiliar(){
        return $this->belongsTo(Familiar::class,'idFamiliar');
    }
}
