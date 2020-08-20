<?php

namespace App\Modules\Categories\Repositories;

use App\Category;
use App\Helpers\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * @var Category
     */
    protected $model;

    /**
     * CategoryRepository constructor.
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    /**
     * Get list categories
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Category::where('parent_id', 0)->with('childrenCategories')->get();
    }
}
