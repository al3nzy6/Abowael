<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class sms_groups
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string name
 * @property string description
 * @property integer publish
 */
class sms_groups extends Model
{

    public $table = 'sms_groups';
    
    public $timestamps = false;




    public $fillable = [
        'name',
        'description',
        'publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'publish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'publish' => 'required'
    ];

    
}
