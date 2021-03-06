<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditoriaCertificado extends Model
{
    use HasFactory;

    public function idUsuario(){
        return $this->belongsTo(Usuario::class,'idUsuario');
    }

    public function idCertificado(){
        return $this->belongsTo(Certificado::class,'idCertificado');
    }
    
    public function idMedico(){
        return $this->belongsTo(Medico::class,'idMedico');
    }

    public function idTipoCertificado(){
        return $this->belongsTo(TipoCertificado::class);
    }

    public function idPatogolia(){
        return $this->belongsTo(Patologia::class);
    }
}
