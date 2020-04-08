<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class failed_jobs
 * @package App\Models
 * @version March 23, 2020, 7:29 pm UTC
 *
 * @property string connection
 * @property string queue
 * @property string payload
 * @property string exception
 * @property string|\Carbon\Carbon failed_at
 */
class failed_jobs extends Model
{

    public $table = 'failed_jobs';
    
    public $timestamps = false;




    public $fillable = [
        'connection',
        'queue',
        'payload',
        'exception',
        'failed_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'connection' => 'string',
        'queue' => 'string',
        'payload' => 'string',
        'exception' => 'string',
        'failed_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'connection' => 'required',
        'queue' => 'required',
        'payload' => 'required',
        'exception' => 'required',
        'failed_at' => 'required'
    ];

    
}
