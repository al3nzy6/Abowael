<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_book
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string title
 * @property string puplish_date
 * @property string puplish_house
 * @property string about_book
 * @property string book_link
 * @property string cover_link
 * @property integer hegoog
 */
class ra_book extends Model
{

    public $table = 'ra_book';
    
    public $timestamps = false;




    public $fillable = [
        'title',
        'puplish_date',
        'puplish_house',
        'about_book',
        'book_link',
        'cover_link',
        'hegoog'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'book_id' => 'integer',
        'title' => 'string',
        'puplish_date' => 'string',
        'puplish_house' => 'string',
        'about_book' => 'string',
        'book_link' => 'string',
        'cover_link' => 'string',
        'hegoog' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
