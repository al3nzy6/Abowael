<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_reply
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property integer id
 * @property integer content_id
 * @property integer r_id
 * @property string r_name
 * @property string r_email
 * @property string r_answer
 * @property string r_datetime
 * @property string publish
 * @property integer readable
 */
class ra_reply extends Model
{

    public $table = 'ra_reply';
    
    public $timestamps = false;




    public $fillable = [
        'id',
        'content_id',
        'r_id',
        'r_name',
        'r_email',
        'r_answer',
        'r_datetime',
        'publish',
        'readable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'content_id' => 'integer',
        'r_id' => 'integer',
        'r_name' => 'string',
        'r_email' => 'string',
        'r_answer' => 'string',
        'r_datetime' => 'string',
        'publish' => 'string',
        'readable' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content_id' => 'required',
        'r_id' => 'required',
        'r_name' => 'required',
        'r_email' => 'required',
        'r_answer' => 'required',
        'r_datetime' => 'required',
        'publish' => 'required',
        'readable' => 'required'
    ];

    
}
