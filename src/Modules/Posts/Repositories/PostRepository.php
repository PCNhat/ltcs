<?php

namespace App\Modules\Posts\Repositories;

use App\Helpers\Repositories\BaseRepository;
use App\Post;

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
}
