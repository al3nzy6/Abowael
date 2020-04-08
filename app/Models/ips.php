<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ips
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property integer ips
 * @property string code
 */
class ips extends Model
{

    public $table = 'ips';
    
    public $timestamps = false;




    public $fillable = [
        'ips',
        'code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ips' => 'integer',
        'code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ips' => 'required',
        'code' => 'required'
    ];

    
}
