<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_pages
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string pages
 * @property string description
 * @property integer publish
 */
class ra_pages extends Model
{

    public $table = 'ra_pages';
    
    public $timestamps = false;




    public $fillable = [
        'pages',
        'description',
        'publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pages_id' => 'integer',
        'pages' => 'string',
        'description' => 'string',
        'publish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pages' => 'required',
        'publish' => 'required'
    ];

    
}
