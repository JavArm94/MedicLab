<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Parentesco
 * @package App\Models
 * @version November 7, 2020, 3:24 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $familiares
 * @property string $nombreParentesco
 */
class Parentesco extends Model
{

    public $table = 'parentescos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nombreParentesco'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreParentesco' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreParentesco' => 'required|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function familiares()
    {
        return $this->hasMany(\App\Models\Familiare::class, 'idParentesco');
    }
}
