<?php

namespace App\Repositories;

use App\Models\salebranches;
use App\Repositories\BaseRepository;

/**
 * Class salebranchesRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class salebranchesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mobile',
        'name',
        'mail',
        'date',
        'price1',
        'type1',
        'message'
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
        return salebranches::class;
    }
}
