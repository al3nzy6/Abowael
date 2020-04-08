<?php

namespace App\Repositories;

use App\Models\video_class;
use App\Repositories\BaseRepository;

/**
 * Class video_classRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:31 pm UTC
*/

class video_classRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'video_class',
        'comment',
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
        return video_class::class;
    }
}
