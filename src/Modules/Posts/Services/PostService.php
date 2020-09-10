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
}
