<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class sound_class
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property integer page_id
 * @property string class_name
 * @property string description
 * @property integer publish
 */
class sound_class extends Model
{

    public $table = 'sound_class';
    
    public $timestamps = false;




    public $fillable = [
        'page_id',
        'class_name',
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
        'page_id' => 'integer',
        'class_name' => 'string',
        'description' => 'string',
        'publish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'page_id' => 'required',
        'class_name' => 'required',
        'description' => 'required',
        'publish' => 'required'
    ];

    
}
