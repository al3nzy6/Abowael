<?php

namespace App\Repositories;

use App\Models\stats;
use App\Repositories\BaseRepository;

/**
 * Class statsRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class statsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ip',
        'date',
        'hits'
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
        return stats::class;
    }
}
