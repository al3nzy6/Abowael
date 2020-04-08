<?php

namespace App\Repositories;

use App\Models\ra_reply;
use App\Repositories\BaseRepository;

/**
 * Class ra_replyRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_replyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'content_id',
        'r_id',
        'r_name',
        'r_email',
        'r_answer',
        'r_datetime',
        'publish',
        'readable'
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
        return ra_reply::class;
    }
}
