<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class stats
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string ip
 * @property string date
 * @property integer hits
 */
class stats extends Model
{

    public $table = 'stats';
    
    public $timestamps = false;




    public $fillable = [
        'ip',
        'date',
        'hits'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ip' => 'string',
        'date' => 'string',
        'hits' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip' => 'required',
        'date' => 'required',
        'hits' => 'required'
    ];

    
}
