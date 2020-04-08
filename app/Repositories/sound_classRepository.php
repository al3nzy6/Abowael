<?php

namespace App\Repositories;

use App\Models\sound_class;
use App\Repositories\BaseRepository;

/**
 * Class sound_classRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class sound_classRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'page_id',
        'class_name',
        'description',
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
        return sound_class::class;
    }
}
