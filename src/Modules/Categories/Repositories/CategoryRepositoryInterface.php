<?php

namespace App\Modules\Categories\Repositories;

use App\Category;
use App\Helpers\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get list categories
     *
     * @return Collection
     */
    public function getAll(): Collection;
}
