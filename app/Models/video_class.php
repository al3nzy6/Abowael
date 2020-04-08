<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class video_class
 * @package App\Models
 * @version March 23, 2020, 7:31 pm UTC
 *
 * @property string video_class
 * @property string comment
 * @property boolean publish
 */
class video_class extends Model
{

    public $table = 'video_class';
    
    public $timestamps = false;




    public $fillable = [
        'video_class',
        'comment',
        'publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'video_class' => 'string',
        'comment' => 'string',
        'publish' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'video_class' => 'required',
        'comment' => 'required',
        'publish' => 'required'
    ];

    
}
