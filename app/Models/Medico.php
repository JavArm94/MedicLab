<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Medico
 * @package App\Models
 * @version November 7, 2020, 8:53 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property integer $nroMatricula
 * @property string $apellido
 * @property string $nombres
 */
class Medico extends Model
{

    public $table = 'medicos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nroMatricula',
        'apellido',
        'nombres'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nroMatricula' => 'integer',
        'apellido' => 'string',
        'nombres' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nroMatricula' => 'required|integer|unique:medicos',
        'apellido' => 'required|string|max:45',
        'nombres' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function getApellidoNombresAttribute()
    {
        return $this->apellido . ', ' . $this->nombres;
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idMedico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idMedico');
    }
}
