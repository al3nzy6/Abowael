<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_users
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string first_name
 * @property string last_name
 * @property string email_address
 * @property string username
 * @property string password
 * @property string info
 * @property string user_level
 * @property string|\Carbon\Carbon signup_date
 * @property string|\Carbon\Carbon last_login
 * @property string activated
 * @property integer upload_no
 */
class ra_users extends Model
{

    public $table = 'ra_users';
    
    public $timestamps = false;




    public $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'username',
        'password',
        'info',
        'user_level',
        'signup_date',
        'last_login',
        'activated',
        'upload_no'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'email_address' => 'string',
        'username' => 'string',
        'password' => 'string',
        'info' => 'string',
        'user_level' => 'string',
        'signup_date' => 'datetime',
        'last_login' => 'datetime',
        'activated' => 'string',
        'upload_no' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email_address' => 'required',
        'username' => 'required',
        'password' => 'required',
        'info' => 'required',
        'user_level' => 'required',
        'signup_date' => 'required',
        'last_login' => 'required',
        'activated' => 'required',
        'upload_no' => 'required'
    ];

    
}
