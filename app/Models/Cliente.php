<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cliente
 * @package App\Models
 * @version January 8, 2023, 3:47 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $ventas
 * @property string $nombres
 * @property string $apellidos
 * @property string $telefono
 * @property string $direccion
 * @property string $cui
 */
class Cliente extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
        'cui'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombres' => 'string',
        'apellidos' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'cui' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombres' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'telefono' => 'required|string|max:255',
        'direccion' => 'required|string|max:255',
        'cui' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function ventas()
    {
        return $this->hasMany(\App\Models\Venta::class, 'cliente_id');
    }
}
