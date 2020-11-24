<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;

    public function auditoriaCertificado(){
        return $this->hasMany(AuditoriaCertificado::class,'idAuditoriaCertificado');
    }

    public function notificacionesCertificado(){
        return $this->hasMany(NotificacionCertificado::class,'idNotificacion');
    }

    public function tipoCertificado(){
        return $this->belongsTo(TipoCertificado::class,'idTipoCertificado');
    }

    public function medico(){
        return $this->belongsTo(Medico::class,'idMedico');
    }

    public function patologia(){
        return $this->belongsTo(Patologia::class,'idPatologia');
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class,'idUsuarioCertificado');
    }

    public function familiar(){
        return $this->belongsTo(Familiar::class,'idFamiliar');
    }

    public static function certificadosFiltro($idmedico, $estado, $fecha_inicial, $fecha_final)
    {
        return Certificado::estado($estado)->fechasCertificado($fecha_inicial, $fecha_final)->doctor($idmedico)->get(); //paginate(9);
    }

    public function scopeDoctor($query, $idmedico)
    {
             if (!empty($idmedico)){
                return $query->where('idMedico', $idmedico);
            }
            
    }


    public function scopeEstado($query, $estado)
    {
        if (!empty($estado)) {
            return $query->where('estadoCertificado', $estado);
        }
    }


    public function scopeFechasCertificado($query, $fecha_inicial, $fecha_final)
    {
        if (!empty($fecha_inicial) && !empty($fecha_final)) {
            return $query->whereBetween('fechaCertificado', [$fecha_inicial, $fecha_final]);
        } elseif (!empty($fecha_inicial) && empty($fecha_final)) {
            return $query->where('fechaCertificado', '>=', $fecha_inicial);
        } elseif(empty($fecha_inicial) && !empty($fecha_final)) {
            return $query->where('fechaCertificado', '<=', $fecha_final);
        }
    }
}
