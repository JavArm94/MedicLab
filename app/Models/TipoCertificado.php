<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCertificado extends Model
{
    use HasFactory;

    public function idAuditoriaCertificado(){
        return $this->hasMany(AuditoriaCertificado::class,'idTipoCertificado');
    }
}
