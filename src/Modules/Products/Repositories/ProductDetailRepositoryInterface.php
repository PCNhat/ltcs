<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepositoryInterface;

interface ProductDetailRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Get Product detail if exist
     *
     * @param array $conditions
     * @return object
     */
    public function findByConditions(array $conditions);
}
