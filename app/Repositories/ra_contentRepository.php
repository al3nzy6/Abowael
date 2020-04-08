<?php

namespace App\Repositories;

use App\Models\ra_content;
use App\Repositories\BaseRepository;

/**
 * Class ra_contentRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_contentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ra_content::class;
    }
}
