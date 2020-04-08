<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class sms_recieved
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string number
 * @property string name
 * @property integer sms_groups_id
 */
class sms_recieved extends Model
{

    public $table = 'sms_recieved';
    
    public $timestamps = false;




    public $fillable = [
        'number',
        'name',
        'sms_groups_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number' => 'string',
        'name' => 'string',
        'sms_groups_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number' => 'required',
        'sms_groups_id' => 'required'
    ];

    
}
