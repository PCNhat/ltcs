<?php

namespace App\Modules\Users\Repositories;

use App\Helpers\Repositories\BaseRepositoryInterface;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get user with roles
     *
     * @return mixed
     */
    public function getAllWithRoles();
}
