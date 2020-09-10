<?php

namespace App\Modules\Posts\Services;

use App\Modules\Posts\Repositories\PostRepositoryInterface;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class PostService implements PostServiceInterface
{
    /**
     * @var PostRepositoryInterface $postRepository
     */
    protected $postRepository;

    /**
     * PostService constructor.
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Get list posts
     *
     * @return Model|mixed
     */
    public function listPost()
    {
        return $this->postRepository->all();
    }

    /**
     * Store post
     *
     * @param array $data
     * @return Model
     */
    public function storePost(array $data): Model
    {
        return $this->postRepository->create($data);
    }

    /**
     * Update post
     *
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function updatePost(array $data, int $id): bool
    {
        return $this->postRepository->update($data, $id);
    }

    /**
     * show post by id
     * @param int $id
     * @return mixed
     */
    public function showPost(int $id)
    {
        return $this->postRepository->getById($id);
    }

    /**
     * Delete post
     * @param int $id
     * @return bool
     */
    public function deletePost(int $id): bool
    {
        return $this->postRepository->delete($id);
    }
}
