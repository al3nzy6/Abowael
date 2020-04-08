<?php

namespace App\Repositories;

use App\Models\shakawi;
use App\Repositories\BaseRepository;

/**
 * Class shakawiRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class shakawiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mail',
        'date',
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
        return shakawi::class;
    }
}
