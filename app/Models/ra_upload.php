<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_upload
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property integer userid
 * @property string file_name
 * @property string|\Carbon\Carbon upload_date
 * @property integer size
 * @property string type
 * @property string caption
 */
class ra_upload extends Model
{

    public $table = 'ra_upload';
    
    public $timestamps = false;




    public $fillable = [
        'userid',
        'file_name',
        'upload_date',
        'size',
        'type',
        'caption'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userid' => 'integer',
        'file_name' => 'string',
        'upload_date' => 'datetime',
        'size' => 'integer',
        'type' => 'string',
        'caption' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'userid' => 'required',
        'file_name' => 'required',
        'upload_date' => 'required',
        'size' => 'required',
        'type' => 'required',
        'caption' => 'required'
    ];

    
}
