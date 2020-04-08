<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class sound
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property integer page_id
 * @property integer class_id
 * @property string date
 * @property string snd_name
 * @property string file_name
 * @property integer size
 * @property string type
 * @property string visit
 * @property string download
 * @property string sent
 * @property integer soundtype
 */
class sound extends Model
{

    public $table = 'sound';
    
    public $timestamps = false;




    public $fillable = [
        'page_id',
        'class_id',
        'date',
        'snd_name',
        'file_name',
        'size',
        'type',
        'visit',
        'download',
        'sent',
        'soundtype'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'page_id' => 'integer',
        'class_id' => 'integer',
        'date' => 'string',
        'snd_name' => 'string',
        'file_name' => 'string',
        'size' => 'integer',
        'type' => 'string',
        'visit' => 'string',
        'download' => 'string',
        'sent' => 'string',
        'soundtype' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'snd_name' => 'required',
        'file_name' => 'required',
        'size' => 'required',
        'type' => 'required',
        'visit' => 'required',
        'download' => 'required',
        'sent' => 'required',
        'soundtype' => 'required'
    ];

    
}
