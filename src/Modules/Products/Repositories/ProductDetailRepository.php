<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepository;
use App\ProductDetail;

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
}
