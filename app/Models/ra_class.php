<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_class
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property integer pages_id
 * @property string class_n
 * @property string description
 * @property integer publish
 */
class ra_class extends Model
{

    public $table = 'ra_class';
    
    public $timestamps = false;




    public $fillable = [
        'pages_id',
        'class_n',
        'description',
        'publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' => 'integer',
        'pages_id' => 'integer',
        'class_n' => 'string',
        'description' => 'string',
        'publish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class_n' => 'required',
        'publish' => 'required'
    ];

    
}
