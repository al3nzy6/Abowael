<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ra_content
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 *
 * @property string title
 * @property string pages_id
 * @property string class_id
 * @property string content
 * @property string picture
 * @property string created
 * @property string modified
 * @property integer view
 * @property integer reply
 * @property string writer
 * @property integer sent
 * @property integer userid
 * @property integer publish
 */
class ra_content extends Model
{

    public $table = 'ra_content';
    
    public $timestamps = false;




    public $fillable = [
        'title',
        'pages_id',
        'class_id',
        'content',
        'picture',
        'created',
        'modified',
        'view',
        'reply',
        'writer',
        'sent',
        'userid',
        'publish'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content_id' => 'integer',
        'title' => 'string',
        'pages_id' => 'string',
        'class_id' => 'string',
        'content' => 'string',
        'picture' => 'string',
        'created' => 'string',
        'modified' => 'string',
        'view' => 'integer',
        'reply' => 'integer',
        'writer' => 'string',
        'sent' => 'integer',
        'userid' => 'integer',
        'publish' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'sent' => 'required',
        'userid' => 'required',
        'publish' => 'required'
    ];

    public function getpictureAttribute()
    {
        if(!empty($this->attributes['picture']))
        {
        return 'style/pic/'.$this->attributes['picture'];
        }
        else{
            return 'style/images/logo.png';
        }
    }
    public function getcontentAttribute()
    {
        $content = $this->attributes['content'];
        if (strpos($content, 'img') == true && strpos($content, '<p>') == false) {
        $doc = new \DOMDocument();
        
        libxml_use_internal_errors(true);

        $doc->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
        $images = $doc->getElementsByTagName('img');
        foreach($images as $img)
        {
            $url = $img->getAttribute('src');
            $url = asset($url);
            $img->setAttribute('src', $url);
        }
        return $doc->saveHTML();
        }else
        {
            return $content;
        }
    }
}
