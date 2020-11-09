<?php

namespace App\Repositories;

use App\Models\Cargo;
use App\Repositories\BaseRepository;

/**
 * Class CargoRepository
 * @package App\Repositories
 * @version November 5, 2020, 11:27 pm UTC
*/

class CargoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreCargo'
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
        return Cargo::class;
    }
}
