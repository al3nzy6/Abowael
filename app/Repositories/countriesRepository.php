<?php

namespace App\Repositories;

use App\Models\countries;
use App\Repositories\BaseRepository;

/**
 * Class countriesRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:29 pm UTC
*/

class countriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'country'
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
        return countries::class;
    }
}
