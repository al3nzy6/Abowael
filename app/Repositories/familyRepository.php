<?php

namespace App\Repositories;

use App\Models\family;
use App\Repositories\BaseRepository;

/**
 * Class familyRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class familyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date',
        'first_name',
        'second_name',
        'third_name',
        'family',
        'id_num',
        'mobile',
        'reg_day',
        'reg_month',
        'reg_year',
        'area',
        'job',
        'sharing',
        'id_pic',
        'profile_pc'
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
        return family::class;
    }
}
