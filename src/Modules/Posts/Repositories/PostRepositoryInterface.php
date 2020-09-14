<?php

namespace App\Modules\Posts\Repositories;

use App\Helpers\Repositories\BaseRepositoryInterface;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * count post
     * @return int
     */
    public function countPost(): int;

    /**
     * count post around day
     * @return int
     */
    public function countPostAroundDay(): int;
}
