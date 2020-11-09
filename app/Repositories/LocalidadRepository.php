<?php

namespace App\Repositories;

use App\Models\Localidad;
use App\Repositories\BaseRepository;

/**
 * Class LocalidadRepository
 * @package App\Repositories
 * @version November 6, 2020, 12:21 am UTC
*/

class LocalidadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreLocalidad'
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
        return Localidad::class;
    }
}
