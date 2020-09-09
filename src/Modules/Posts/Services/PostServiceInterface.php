<?php

namespace App\Modules\Posts\Services;

use Illuminate\Database\Eloquent\Model;

interface PostServiceInterface
{
    /**
     * Store post
     *
     * @param array $data
     * @return Model
     */
    public function storePost(array $data): Model;

    /**
     * Update post
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function updatePost(array $data, int $id): bool;
}
