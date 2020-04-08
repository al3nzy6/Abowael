<?php

namespace App\Repositories;

use App\Models\video;
use App\Repositories\BaseRepository;

/**
 * Class videoRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:31 pm UTC
*/

class videoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'video_class',
        'date',
        'video_name',
        'video_link',
        'pic_link',
        'visit',
        'sent'
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
        return video::class;
    }
}
