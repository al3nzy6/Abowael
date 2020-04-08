<?php

namespace App\Repositories;

use App\Models\sms_recieved;
use App\Repositories\BaseRepository;

/**
 * Class sms_recievedRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class sms_recievedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'name',
        'sms_groups_id'
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
        return sms_recieved::class;
    }
}
