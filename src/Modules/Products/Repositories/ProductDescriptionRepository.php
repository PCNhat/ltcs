<?php

namespace App\Modules\Products\Repositories;

use App\Helpers\Repositories\BaseRepository;
use App\ProductDescription;

class ProductDescriptionRepository extends BaseRepository implements ProductDescriptionRepositoryInterface
{
    /**
     * @var ProductDescription
     */
    protected $model;

    /**
     * CategoryRepository constructor.
     * @param ProductDescription $model
     */
    public function __construct(ProductDescription $model)
    {
        $this->model = $model;
    }
}
