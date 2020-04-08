<?php

namespace App\Repositories;

use App\Models\password_resets;
use App\Repositories\BaseRepository;

/**
 * Class password_resetsRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class password_resetsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'token',
        'created_at'
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
        return password_resets::class;
    }
}
