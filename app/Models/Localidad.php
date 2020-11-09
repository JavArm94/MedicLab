<?php

namespace App\Models;

/* use Eloquent as Model; */
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Localidad
 * @package App\Models
 * @version November 6, 2020, 12:21 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $usuarios
 * @property string $nombreLocalidad
 */
class Localidad extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $table = 'localidades';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreLocalidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreLocalidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreLocalidad' => 'required|string|max:255|unique:localidades',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function usuarios()
    {
        return $this->hasMany(\App\Models\Usuario::class, 'idLocalidad');
    }
}
