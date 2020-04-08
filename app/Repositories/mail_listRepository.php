<?php

namespace App\Repositories;

use App\Models\mail_list;
use App\Repositories\BaseRepository;

/**
 * Class mail_listRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class mail_listRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email'
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
        return mail_list::class;
    }
}
