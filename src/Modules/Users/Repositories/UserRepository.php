<?php

namespace App\Modules\Users\Repositories;

use App\Helpers\Constant;
use App\Helpers\Repositories\BaseRepository;
use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * @var User $model
     */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Get user with roles
     *
     * @return mixed
     */
    public function getAllWithRoles()
    {
        return User::with('roles')
            ->orderBy('id', 'desc')
            ->paginate(Constant::DEFAULT_PAGINATION);
    }

}
