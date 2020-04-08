<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class hegoog
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string hegoog
 */
class hegoog extends Model
{

    public $table = 'hegoog';
    
    public $timestamps = false;




    public $fillable = [
        'hegoog'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'hegoog_id' => 'integer',
        'hegoog' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hegoog' => 'required'
    ];

    
}
