<?php

namespace App\Repositories;

use App\Models\ra_users;
use App\Repositories\BaseRepository;

/**
 * Class ra_usersRepository
 * @package App\Repositories
 * @version March 23, 2020, 7:30 pm UTC
*/

class ra_usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'email_address',
        'username',
        'password',
        'info',
        'user_level',
        'signup_date',
        'last_login',
        'activated',
        'upload_no'
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
        return ra_users::class;
    }
}
