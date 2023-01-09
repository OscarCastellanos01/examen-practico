<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Venta
 * @package App\Models
 * @version January 8, 2023, 3:47 pm UTC
 *
 * @property \App\Models\Cliente $cliente
 * @property \App\Models\Producto $producto
 * @property \App\Models\User $user
 * @property string $fecha_probable
 * @property string $fecha_contacto
 * @property string $acuerdo
 * @property integer $user_id
 * @property integer $cliente_id
 * @property integer $producto_id
 */
class Venta extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ventas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_probable',
        'fecha_contacto',
        'acuerdo',
        'user_id',
        'cliente_id',
        'producto_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha_probable' => 'string',
        'fecha_contacto' => 'string',
        'acuerdo' => 'string',
        'user_id' => 'integer',
        'cliente_id' => 'integer',
        'producto_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_probable' => 'required|string|max:255',
        'fecha_contacto' => 'required|string|max:255',
        'acuerdo' => 'required|string|max:255',
        'user_id' => 'required',
        'cliente_id' => 'required',
        'producto_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function producto()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'producto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
