<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class salebranches
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string mobile
 * @property string name
 * @property string mail
 * @property string date
 * @property string price1
 * @property string type1
 * @property string message
 */
class salebranches extends Model
{

    public $table = 'salebranches';
    
    public $timestamps = false;




    public $fillable = [
        'mobile',
        'name',
        'mail',
        'date',
        'price1',
        'type1',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shid' => 'integer',
        'mobile' => 'string',
        'name' => 'string',
        'mail' => 'string',
        'date' => 'date',
        'price1' => 'string',
        'type1' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mobile' => 'required',
        'name' => 'required',
        'mail' => 'required',
        'price1' => 'required',
        'type1' => 'required'
    ];

    
}
