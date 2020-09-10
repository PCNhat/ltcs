<?php

namespace App\Modules\Contacts\Services;

use App\Modules\Contacts\Repositories\ContactRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ContactService implements ContactServiceInterface
{
    /**
     * @var ContactRepositoryInterface $scommentRepository
     */
    protected $contactRepository;

    /**
     * CommentService constructor.
     *
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * Get list comment contact
     *
     * @param array $conditions
     * @param string $orderBy
     * @param int $limit
     * @return object
     */
   public function getFilterAllCommentContact(array $conditions, string $orderBy, int $limit): object
   {
        return $this->contactRepository->filterAllCommentContact($conditions, $orderBy, $limit);
   }

    /**
     * Update comment
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateCommentContact(int $id, array $data): bool
    {
        return $this->contactRepository->update($data, $id);
    }

    /**
     * Add comment
     *
     * @param array $data
     * @return Model
     */
    public function addCommentContact(array $data): Model
    {
        return $this->contactRepository->create($data);
    }
}
