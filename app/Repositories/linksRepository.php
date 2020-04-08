<?php

namespace App\Repositories;

use App\Models\links;
use App\Repositories\BaseRepository;

/**
 * Class linksRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class linksRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subject',
        'link'
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
        return links::class;
    }
}
