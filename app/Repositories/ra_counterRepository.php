<?php

namespace App\Repositories;

use App\Models\ra_counter;
use App\Repositories\BaseRepository;

/**
 * Class ra_counterRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_counterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ID',
        'Count'
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
        return ra_counter::class;
    }
}
