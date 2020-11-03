<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    public function idAuditoriaCertificado(){
        return $this->hasMany(AuditoriaCertificado::class);
    }

    public function idNotificacionCertificado(){
        return $this->hasMany(NotificacionCertificado::class);
    }

    public function idTipoCertificado(){
        return $this->belongsTo(TipoCertificado::class);
    }

    public function idMedico(){
        return $this->belongsTo(Medico::class);
    }

    public function idPatologia(){
        return $this->belongsTo(Patologia::class);
    }

    public function idUsuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function idFamiliar(){
        return $this->belongsTo(Familiar::class);
    }
}
