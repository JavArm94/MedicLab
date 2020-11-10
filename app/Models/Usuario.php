<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/**
 * Class Usuario
 * @package App\Models
 * @version November 4, 2020, 6:26 pm UTC
 *
 * @property \App\Models\Cargo $idcargo
 * @property \App\Models\Genero $idgenero
 * @property \App\Models\Localidade $idlocalidad
 * @property \App\Models\Role $idrol
 * @property \App\Models\TipoDocumento $idtipodocumento
 * @property \App\Models\TipoUsuario $idtipousuario
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificados
 * @property \Illuminate\Database\Eloquent\Collection $auditoriaCertificado1s
 * @property \Illuminate\Database\Eloquent\Collection $certificados
 * @property \Illuminate\Database\Eloquent\Collection $familiares
 * @property \Illuminate\Database\Eloquent\Collection $notificaciones
 * @property integer $legajo
 * @property string $apellido
 * @property string $nombreUsuario
 * @property string $contrasenaUsuario
 * @property string $fechaNacimiento
 * @property string $direccion
 * @property string $correoElectronico
 * @property integer $numeroDocumento
 * @property boolean $estadoBaja
 * @property integer $idCargo
 * @property integer $idLocalidad
 * @property integer $idTipoDocumento
 * @property integer $idTipoUsuario
 * @property integer $idRol
 * @property integer $idGenero
 */
class Usuario extends Authenticatable   
{
    use SoftDeletes,HasFactory,Notifiable;

    public $table = 'usuarios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'legajo',
        'apellido',
        'nombreUsuario',    
        'contrasenaUsuario',
        'fechaNacimiento',
        'direccion',
        'correoElectronico',
        'numeroDocumento',
        'estadoBaja',
        'idCargo',
        'idLocalidad',
        'idTipoDocumento',
        'idTipoUsuario',
        'idRol',
        'idGenero'
    ];


    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
      /*  'id' => 'integer',*/
        'legajo' => 'integer',
        'apellido' => 'string',
        'nombreUsuario' => 'string',
        'contrasenaUsuario' => 'string',
        'fechaNacimiento' => 'date',
        'direccion' => 'string',
        'correoElectronico' => 'string',
        'numeroDocumento' => 'integer',
        'estadoBaja' => 'boolean',
        'idCargo' => 'integer',
        'idLocalidad' => 'integer',
        'idTipoDocumento' => 'integer',
        'idTipoUsuario' => 'integer',
        'idRol' => 'integer',
        'idGenero' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
       /* 'id'=>'required',**/
        'legajo' => 'required|integer',
        'apellido' => 'required|string|max:45',
        'nombreUsuario' => 'required|string|max:30',
        'contrasenaUsuario' => 'required|string|max:45',
        'fechaNacimiento' => 'required',
        'direccion' => 'required|string|max:45',
        'correoElectronico' => 'required|string|max:45',
        'numeroDocumento' => 'required',
        'estadoBaja' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
       'idCargo' => 'required',
        'idLocalidad' => 'required',
        'idTipoDocumento' => 'required',
        'idTipoUsuario' => 'required',
        'idRol' => 'required',
        'idGenero' => 'required'
    ];


    public function getAuthPassword()
    {
        return $this->attributes['contrasenaUsuario'];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcargo()
    {
        return $this->belongsTo(\App\Models\Cargo::class, 'idCargo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idgenero()
    {
        return $this->belongsTo(\App\Models\Genero::class, 'idGenero');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idlocalidad()
    {
        return $this->belongsTo(\App\Models\Localidade::class, 'idLocalidad');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idrol()
    {
        return $this->belongsTo(\App\Models\Role::class, 'idRol');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipodocumento()
    {
        return $this->belongsTo(\App\Models\TipoDocumento::class, 'idTipoDocumento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idtipousuario()
    {
        return $this->belongsTo(\App\Models\TipoUsuario::class, 'idTipoUsuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificados()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idUsuarioCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function auditoriaCertificado1s()
    {
        return $this->hasMany(\App\Models\AuditoriaCertificado::class, 'idUsuarioQueModifica');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function certificados()
    {
        return $this->hasMany(\App\Models\Certificado::class, 'idUsuarioCertificado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function familiares()
    {
        return $this->hasMany(\App\Models\Familiare::class, 'idUsuario');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function notificaciones()
    {
        return $this->hasMany(\App\Models\Notificacione::class, 'idUsuarioDestinatario');
    }
}
