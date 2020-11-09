<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rol
 * @package App\Models
 * @version November 4, 2020, 7:25 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 * @property string $nombreRol
 */
class Rol extends Model
{
    use SoftDeletes;

    public $table = 'roles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreRol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreRol' => 'string'
    ];

    /**
     * Reglas de validación
     *
     * @var array
     */
    public static $rules = [
        'nombreRol' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idRol');
    }
}
