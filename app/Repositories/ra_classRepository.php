<?php

namespace App\Repositories;

use App\Models\ra_class;
use App\Repositories\BaseRepository;

/**
 * Class ra_classRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_classRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pages_id',
        'class_n',
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
        return ra_class::class;
    }
}
