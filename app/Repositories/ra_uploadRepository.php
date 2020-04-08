<?php

namespace App\Repositories;

use App\Models\ra_upload;
use App\Repositories\BaseRepository;

/**
 * Class ra_uploadRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_uploadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'file_name',
        'upload_date',
        'size',
        'type',
        'caption'
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
        return ra_upload::class;
    }
}
