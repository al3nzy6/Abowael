<?php

namespace App\Repositories;

use App\Models\ips;
use App\Repositories\BaseRepository;

/**
 * Class ipsRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ipsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ips',
        'code'
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
        return ips::class;
    }
}
