<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Genero
 * @package App\Models
 * @version November 5, 2020, 11:06 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $familiares
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 * @property string $genero
 */
class Genero extends Model
{
    use SoftDeletes;

    public $table = 'generos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'genero'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'genero' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'genero' => 'required|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function familiares()
    {
        return $this->hasMany(\App\Models\Familiare::class, 'idGenero');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idGenero');
    }
}
