<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class video
 * @package App\Models
 * @version March 23, 2020, 7:31 pm UTC
 *
 * @property integer video_class
 * @property string date
 * @property string video_name
 * @property string video_link
 * @property string pic_link
 * @property integer visit
 * @property integer sent
 */
class video extends Model
{

    public $table = 'video';
    
    public $timestamps = false;




    public $fillable = [
        'video_class',
        'date',
        'video_name',
        'video_link',
        'pic_link',
        'visit',
        'sent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'video_class' => 'integer',
        'date' => 'string',
        'video_name' => 'string',
        'video_link' => 'string',
        'pic_link' => 'string',
        'visit' => 'integer',
        'sent' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'video_name' => 'required',
        'video_link' => 'required',
        'pic_link' => 'required',
        'visit' => 'required',
        'sent' => 'required'
    ];

    
}
