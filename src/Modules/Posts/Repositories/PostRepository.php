<?php

namespace App\Modules\Posts\Repositories;

use App\Helpers\Repositories\BaseRepository;
use App\Post;
use Carbon\Carbon;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    /**
     * @var Post $model
     */
    protected $model;

    /**
     * PostRepository constructor.
     * @param Post $model
     */
    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    /**
     * count post
     * @return int
     */
    public function countPost(): int
    {
        return Post::query()->count();
    }

    public function countPostAroundDay(): int
    {
        return Post::query()->where('created_at', '>', Carbon::now()->subDay())->count();
    }
}
