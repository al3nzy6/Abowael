<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_useronline
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string ip
 * @property string file
 */
class ra_useronline extends Model
{

    public $table = 'ra_useronline';
    
    public $timestamps = false;




    public $fillable = [
        'ip',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'timestamp' => 'integer',
        'ip' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ip' => 'required',
        'file' => 'required'
    ];

    
}
