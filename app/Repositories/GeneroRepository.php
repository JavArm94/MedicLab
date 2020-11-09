<?php

namespace App\Repositories;

use App\Models\Genero;
use App\Repositories\BaseRepository;

/**
 * Class GeneroRepository
 * @package App\Repositories
 * @version November 5, 2020, 11:06 pm UTC
*/

class GeneroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'genero'
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
        return Genero::class;
    }
}
