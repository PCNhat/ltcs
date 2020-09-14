<?php

namespace App\Modules\Posts\Services;

use Illuminate\Database\Eloquent\Model;

interface PostServiceInterface
{
    /**
     * Get list posts
     * @return mixed
     */
    public function listPost();

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

    /**
     * show post by id
     * @param int $id
     * @return mixed
     */
    public function showPost(int $id);

    /**
     * Delete post
     * @param int $id
     * @return bool
     */
    public function deletePost(int $id): bool;

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
