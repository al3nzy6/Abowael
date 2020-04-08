<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_job_class
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string takhsos
 * @property string description
 * @property integer publish
 */
class ra_job_class extends Model
{

    public $table = 'ra_job_class';
    
    public $timestamps = false;




    public $fillable = [
        'takhsos',
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
        'takhsos' => 'string',
        'description' => 'string',
        'publish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'takhsos' => 'required',
        'publish' => 'required'
    ];

    
}
