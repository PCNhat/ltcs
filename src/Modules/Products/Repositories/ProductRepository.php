<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepository;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    protected $model;

    /**
     * CategoryRepository constructor.
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * Find by product name and category id
     *
     * @param array $conditions
     * @return object
     */
    public function findByConditions(array $conditions)
    {
        return Product::where($conditions)->get()->first();
    }

    /**
     * Get list product and product detail
     *
     * @return Builder[]|Collection
     */
    public function getListWithProductDetail()
    {
        return Product::with('productDetail', 'category', 'description')->get();
    }

    /**
     * Find product and product detail
     *
     * @param int $id
     * @return Builder[]|Collection
     */
    public function findWithProductDetail(int $id)
    {
        return Product::with('productDetail')->findOrFail($id);
    }

}
