<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function idFamiliar(){
        return $this->hasMany(Familiar::class,'idFamiliar');
    }

    public function idAuditoriaCertificado(){
        return $this->hasMany(AuditoriaCertificado::class,'idAuditoriaCertificado');
    }
    
    public function idLocalidad(){
            return $this->belongsTo(Localidad::class,'idLocalidad');
        }

    public function idCargo(){
        return $this->belongsTo(Cargo::class,'idCargo');
    }

    public function idTipoDocumento(){
        return $this->belongsTo(TipoDocumento::class,'idTipoDocumento');
    }

    public function idTipoUsuario(){
        return $this->belongsTo(TipoUsuario::class,'idTipoUsuario');
    }

    public function idRol(){
        return $this->belongsTo(Rol::class,'idRol');
    }

    public function idGenero(){
        return $this->belongsTo(Genero::class,'idGenero');
    }
}
