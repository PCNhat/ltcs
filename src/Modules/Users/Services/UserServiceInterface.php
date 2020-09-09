<?php

namespace App\Modules\Users\Services;

use Illuminate\Database\Eloquent\Model;

interface UserServiceInterface
{
    /**
     * Get all user with roles
     *
     * @return mixed
     */
    public function getAllUserWithRoles();

    /**
     * Find user by Id
     *
     * @param int $id
     * @return Model
     */
    public function findUser(int $id): Model;

    /**
     * Store user
     *
     * @param $data
     * @return Model
     */
    public function storeUser($data): Model;

    /**
     * Update user
     *
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function updateUser(array $data, int $id): bool;

    /**
     * Destroy User by Id
     *
     * @param int $id
     * @return bool
     */
    public function destroyUser(int $id): bool;
}
