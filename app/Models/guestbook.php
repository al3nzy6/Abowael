<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class guestbook
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string name
 * @property string email
 * @property string comment
 * @property string datetime
 */
class guestbook extends Model
{

    public $table = 'guestbook';
    
    public $timestamps = false;




    public $fillable = [
        'name',
        'email',
        'comment',
        'datetime'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'comment' => 'string',
        'datetime' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'comment' => 'required',
        'datetime' => 'required'
    ];

    
}
