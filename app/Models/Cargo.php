<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cargo
 * @package App\Models
 * @version November 5, 2020, 11:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 * @property string $nombreCargo
 */
class Cargo extends Model
{
    use SoftDeletes;

    public $table = 'cargos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreCargo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreCargo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreCargo' => 'required|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idCargo');
    }
}
