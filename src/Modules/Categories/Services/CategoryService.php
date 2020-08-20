<?php

namespace App\Modules\Categories\Services;

use App\Category;
use App\Modules\Categories\Repositories\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CategoryService implements CategoryServiceInterface
{
    /**
     * @var CategoryRepositoryInterface $categoryRepository
     */
    protected $categoryRepository;

    /**
     * CategoryService constructor.
     *
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Get list categories
     *
     * @return Collection
     */
    public function getListCategories(): Collection
    {
        return $this->categoryRepository->getAll();
    }

    /**
     * Find categories
     *
     * @var int $id
     * @return Model
     */
    public function findCategory(int $id): Model
    {
        return $this->categoryRepository->getById($id);
    }

    /**
     * Update category
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateCategory(int $id, array $data): bool
    {
        return $this->categoryRepository->update($data, $id);
    }

    /**
     * Add category
     *
     * @param array $data
     * @return Model
     */
    public function addCategory(array $data): Model
    {
        return $this->categoryRepository->create($data);
    }

    /**
     * Delete category
     *
     * @param int $id
     * @return bool
     */
    public function deleteCategories(int $id): bool
    {
        return $this->categoryRepository->delete($id);
    }
}
