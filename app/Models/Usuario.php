<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function familiares(){
        return $this->hasMany(Familiar::class,'idFamiliar');
    }

    public function certificados(){
        return $this->hasMany(Certificado::class,'idUsuarioCertificado');
    }
    public function certificadosAuditoria(){
        return $this->hasMany(AuditoriaCertificado::class,'idAuditoriaCertificado');
    }
    
    public function localidad(){
            return $this->belongsTo(Localidad::class,'idLocalidad');
        }

    public function cargo(){
        return $this->belongsTo(Cargo::class,'idCargo');
    }

    public function tipoDocumento(){
        return $this->belongsTo(TipoDocumento::class,'idTipoDocumento');
    }

    public function tipoUsuario(){
        return $this->belongsTo(TipoUsuario::class,'idTipoUsuario');
    }

    public function rol(){
        return $this->belongsTo(Rol::class,'idRol');
    }

    public function genero(){
        return $this->belongsTo(Genero::class,'idGenero');
    }
}
