<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class migrations
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string migration
 * @property integer batch
 */
class migrations extends Model
{

    public $table = 'migrations';
    
    public $timestamps = false;




    public $fillable = [
        'migration',
        'batch'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'migration' => 'string',
        'batch' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'migration' => 'required',
        'batch' => 'required'
    ];

    
}
