<?php

namespace App\Repositories;

use App\Models\ra_pages;
use App\Repositories\BaseRepository;

/**
 * Class ra_pagesRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_pagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pages',
        'description',
        'publish'
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
        return ra_pages::class;
    }
}
