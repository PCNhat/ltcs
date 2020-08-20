<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepositoryInterface;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;

interface ProductRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Find by product name and category id
     *
     * @param array $conditions
     * @return object
     */
    public function findByConditions(array $conditions);

    /**
     * Get list product and product detail
     *
     * @return Builder[]|Collection
     */
    public function getListWithProductDetail();

    /**
     * Find product and product detail
     *
     * @param int $id
     * @return Builder[]|Collection
     */
    public function findWithProductDetail(int $id);
}
