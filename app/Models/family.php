<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class family
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string date
 * @property string first_name
 * @property string second_name
 * @property string third_name
 * @property string family
 * @property string id_num
 * @property string mobile
 * @property integer reg_day
 * @property integer reg_month
 * @property integer reg_year
 * @property integer area
 * @property integer job
 * @property integer sharing
 * @property string id_pic
 * @property string profile_pc
 */
class family extends Model
{

    public $table = 'family';
    
    public $timestamps = false;




    public $fillable = [
        'date',
        'first_name',
        'second_name',
        'third_name',
        'family',
        'id_num',
        'mobile',
        'reg_day',
        'reg_month',
        'reg_year',
        'area',
        'job',
        'sharing',
        'id_pic',
        'profile_pc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'string',
        'first_name' => 'string',
        'second_name' => 'string',
        'third_name' => 'string',
        'family' => 'string',
        'id_num' => 'string',
        'mobile' => 'string',
        'reg_day' => 'integer',
        'reg_month' => 'integer',
        'reg_year' => 'integer',
        'area' => 'integer',
        'job' => 'integer',
        'sharing' => 'integer',
        'id_pic' => 'string',
        'profile_pc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'first_name' => 'required',
        'second_name' => 'required',
        'third_name' => 'required',
        'family' => 'required',
        'id_num' => 'required',
        'mobile' => 'required',
        'reg_day' => 'required',
        'reg_month' => 'required',
        'reg_year' => 'required',
        'area' => 'required',
        'job' => 'required',
        'sharing' => 'required',
        'id_pic' => 'required',
        'profile_pc' => 'required'
    ];

    
}
