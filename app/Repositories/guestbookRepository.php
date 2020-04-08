<?php

namespace App\Repositories;

use App\Models\guestbook;
use App\Repositories\BaseRepository;

/**
 * Class guestbookRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class guestbookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'comment',
        'datetime'
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
        return guestbook::class;
    }
}
