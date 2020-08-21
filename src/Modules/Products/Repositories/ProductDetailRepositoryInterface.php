<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

interface ProductDetailRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get Product detail if exist
     *
     * @param array $conditions
     * @return object
     */
    public function findByConditions(array $conditions);

    /**
     * Find product detail with product
     *
     * @param int $id
     * @return Builder[]|Collection|null
     */
    public function findWithProduct(int $id);
}
