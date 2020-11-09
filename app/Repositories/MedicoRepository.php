<?php

namespace App\Repositories;

use App\Models\Medico;
use App\Repositories\BaseRepository;

/**
 * Class MedicoRepository
 * @package App\Repositories
 * @version November 7, 2020, 8:53 pm UTC
*/

class MedicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nroMatricula',
        'apellido',
        'nombres'
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
        return Medico::class;
    }
}
