<?php

namespace App\Repositories;

use App\Models\Rol;
use App\Repositories\BaseRepository;

/**
 * Class RolRepository
 * @package App\Repositories
 * @version November 4, 2020, 7:25 pm UTC
*/

class RolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreRol'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rol::class;
    }
}
