<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version July 25, 2022, 12:25 am UTC
 *
 * @property \App\Models\User $idUser
 * @property integer $id_user
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property boolean $state
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id_product';

    public $fillable = [
        'id_user',
        'title',
        'description',
        'price',
        'state'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_product' => 'integer',
        'id_user' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'price' => 'integer',
        'state' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_user' => 'nullable',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|integer',
        'state' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idUser()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user');
    }
}
