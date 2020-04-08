<?php

namespace App\Repositories;

use App\Models\ra_book;
use App\Repositories\BaseRepository;

/**
 * Class ra_bookRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_bookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'puplish_date',
        'puplish_house',
        'about_book',
        'book_link',
        'cover_link',
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
        return ra_book::class;
    }
}
