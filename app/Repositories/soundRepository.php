<?php

namespace App\Repositories;

use App\Models\sound;
use App\Repositories\BaseRepository;

/**
 * Class soundRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class soundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'page_id',
        'class_id',
        'date',
        'snd_name',
        'file_name',
        'size',
        'type',
        'visit',
        'download',
        'sent',
        'soundtype'
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
        return sound::class;
    }
}
