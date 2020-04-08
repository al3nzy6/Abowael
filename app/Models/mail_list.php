<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class mail_list
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string email
 */
class mail_list extends Model
{

    public $table = 'mail_list';
    
    public $timestamps = false;




    public $fillable = [
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required'
    ];

    
}
