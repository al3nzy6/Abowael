<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class links
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string subject
 * @property string link
 */
class links extends Model
{

    public $table = 'links';
    
    public $timestamps = false;




    public $fillable = [
        'subject',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'subject' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subject' => 'required'
    ];

    
}
