<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepository;
use App\ProductDetail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;

class ProductDetailRepository extends BaseRepository implements ProductDetailRepositoryInterface
{
    /**
     * @var ProductDetail
     */
    protected $model;

    /**
     * CategoryRepository constructor.
     * @param ProductDetail $model
     */
    public function __construct(ProductDetail $model)
    {
        $this->model = $model;
    }

    /**
     * Get Product detail if exist
     *
     * @param array $conditions
     * @return object
     */
    public function findByConditions(array $conditions)
    {
        return ProductDetail::where($conditions)->get()->first();
    }

    /**
     * Find product detail with product
     *
     * @param int $id
     * @return Builder[]|Collection
     */
    public function findWithProduct(int $id)
    {
        return ProductDetail::with('product', 'description')->findOrFail($id);
    }
}
