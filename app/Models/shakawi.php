<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class shakawi
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string name
 * @property string mail
 * @property string date
 * @property string message
 */
class shakawi extends Model
{

    public $table = 'shakawi';
    
    public $timestamps = false;




    public $fillable = [
        'name',
        'mail',
        'date',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shid' => 'integer',
        'name' => 'string',
        'mail' => 'string',
        'date' => 'date',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'mail' => 'required'
    ];

    
}
