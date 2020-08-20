<?php

namespace App\Modules\Categories\Services;

use App\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface CategoryServiceInterface
{
    /**
     * Get list categories
     *
     * @return Collection
     */
    public function getListCategories(): Collection;

    /**
     * Find categories
     *
     * @var int $id
     * @return Model
     */
    public function findCategory(int $id): Model;

    /**
     * Update category
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateCategory(int $id, array $data): bool;

    /**
     * Add category
     *
     * @param array $data
     * @return Model
     */
    public function addCategory(array $data): Model;

    /**
     * Delete category
     *
     * @param int $id
     * @return bool
     */
    public function deleteCategories(int $id): bool;
}
