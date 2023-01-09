<?php

namespace App\Repositories;

use App\Models\Venta;
use App\Repositories\BaseRepository;

/**
 * Class VentaRepository
 * @package App\Repositories
 * @version January 8, 2023, 3:47 pm UTC
*/

class VentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_probable',
        'fecha_contacto',
        'acuerdo',
        'user_id',
        'cliente_id',
        'producto_id'
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
        return Venta::class;
    }
}
