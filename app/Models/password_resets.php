<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class password_resets
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string email
 * @property string token
 * @property string|\Carbon\Carbon created_at
 */
class password_resets extends Model
{

    public $table = 'password_resets';
    
    public $timestamps = false;




    public $fillable = [
        'email',
        'token',
        'created_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string',
        'token' => 'string',
        'created_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required',
        'token' => 'required'
    ];

    
}
