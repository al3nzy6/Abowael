<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class countries
 * @package App\Models
 * @version March 23, 2020, 7:29 pm UTC
 *
 * @property string code
 * @property string country
 */
class countries extends Model
{

    public $table = 'countries';
    
    public $timestamps = false;




    public $fillable = [
        'code',
        'country'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'country' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required',
        'country' => 'required'
    ];

    
}
