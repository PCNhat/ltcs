<?php

namespace App\Modules\Users\Services;

use App\Modules\Users\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface $userRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Find user by Id
     *
     * @param int $id
     * @return Model
     */
    public function findUser(int $id): Model
    {
        return $this->userRepository->getById($id);
    }


    /**
     * Get all user with roles
     *
     * @return mixed
     */
    public function getAllUserWithRoles()
    {
        return $this->userRepository->getAllWithRoles();
    }


    /**
     * Store user
     *
     * @param $data
     * @return Model
     */
    public function storeUser($data): Model
    {
        $data['password'] = Hash::make($data['password']);

        return $this->userRepository->create($data);
    }

    /**
     * Update user
     *
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function updateUser(array $data, int $id): bool
    {
        $data['password'] = Hash::make($data['password']);

        return $this->userRepository->update($data, $id);
    }

    /**
     * Destroy User by Id
     *
     * @param int $id
     * @return bool
     */
    public function destroyUser(int $id): bool
    {
        return $this->userRepository->delete($id);
    }

    /**
     * count user
     * @return int
     */
    public function countUser(): int
    {
        return $this->userRepository->countUser();
    }
}
