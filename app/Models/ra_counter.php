<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_counter
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string ID
 * @property string Count
 */
class ra_counter extends Model
{

    public $table = 'ra_counter';
    
    public $timestamps = false;




    public $fillable = [
        'ID',
        'Count'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'string',
        'Count' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ID' => 'required'
    ];

    
}
