<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Categoria
 * @package App\Models
 * @version January 8, 2023, 3:46 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property string $nombre
 */
class Categoria extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categorias';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\Producto::class, 'categoria_id');
    }
}
