<?php

namespace App\Modules\Contacts\Services;

use App\Comment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface ContactServiceInterface
{
    /**
     * get list comment
     * @param array $conditions
     * @param string $orderBy
     * @param int $limit
     * @return object
     */
    public function getFilterAllCommentContact(array $conditions, string $orderBy, int $limit): object;

    /**
     * Update comment
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateCommentContact(int $id, array $data): bool;

    /**
     * Add comment
     *
     * @param array $data
     * @return Model
     */
    public function addCommentContact(array $data): Model;

}
