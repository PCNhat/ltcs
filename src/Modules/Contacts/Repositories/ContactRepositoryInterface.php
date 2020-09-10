<?php

namespace App\Modules\Contacts\Repositories;

use App\Helpers\Repositories\BaseRepositoryInterface;

interface ContactRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * get all comment
     * @param array $conditions
     * @param string $orderBy
     * @param int $limit
     * @return mixed
     */
    public function filterAllCommentContact(array $conditions, string $orderBy, int $limit);
}
