<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\BaseRepository;

/**
 * Class ClienteRepository
 * @package App\Repositories
 * @version January 8, 2023, 3:47 pm UTC
*/

class ClienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
        'cui'
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
        return Cliente::class;
    }
}
