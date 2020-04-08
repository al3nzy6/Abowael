<?php

namespace App\Repositories;

use App\Models\ra_useronline;
use App\Repositories\BaseRepository;

/**
 * Class ra_useronlineRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_useronlineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ip',
        'file'
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
        return ra_useronline::class;
    }
}
