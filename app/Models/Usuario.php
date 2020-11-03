<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function idFamiliar(){
        return $this->hasMany(Familiar::class);
    }

    public function idAuditoriaCertificado(){
        return $this->hasMany(AuditoriaCertificado::class);
    }
    
    public function idLocalidad(){
            return $this->belongsTo(Localidad::class);
        }

    public function idCargo(){
        return $this->belongsTo(Cargo::class);
    }

    public function idTipoDocumento(){
        return $this->belongsTo(TipoDocumento::class);
    }

    public function idTipoUsuario(){
        return $this->belongsTo(TipoUsuario::class);
    }

    public function idRol(){
        return $this->belongsTo(Rol::class);
    }

    public function idGenero(){
        return $this->belongsTo(Genero::class);
    }
}
