<?php

namespace App\Repositories;

use App\Models\hegoog;
use App\Repositories\BaseRepository;

/**
 * Class hegoogRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class hegoogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'hegoog'
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
        return hegoog::class;
    }
}
