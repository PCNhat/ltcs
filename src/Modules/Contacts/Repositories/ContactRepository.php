<?php

namespace App\Modules\Contacts\Repositories;

use App\Contact;
use App\Helpers\Repositories\BaseRepository;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    /**
     * @var Contact
     */
    protected $model;

    /**
     * CommentRepository constructor.
     * @param Contact $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $conditions
     * @param string $orderBy
     * @param int $limit
     * @return mixed
     */
    public function filterAllCommentContact(array $conditions, string $orderBy, int $limit)
    {
        return $this->model
            ->where($conditions)
            ->orderBy('id', $orderBy)
            ->with('childrenContacts')
            ->paginate($limit);
    }
}
