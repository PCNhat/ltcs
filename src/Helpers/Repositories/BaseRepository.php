<?php

namespace App\Helpers\Repositories;

use Illuminate\Database\Eloquent\Model;
use Exception;
use Ramsey\Collection\Collection;


abstract class BaseRepository implements BaseRepositoryInterface
{
    /**
     * The repository model.
     *
     * @var Model
     */
    protected $model;

    /**
     * Get all the model records in the database.
     *
     * @return Collection|Model[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     *  create from the database
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * Get the specified model record from the database.
     *
     * @param $id
     * @return Model
     */
    public function getById($id): Model
    {
        return $this->model->findOrFail($id);
    }

    /**
     *  Update form the database
     *
     * @param array $data
     * @param $id
     *
     * @return bool
     */
    public function update(array $data, $id): bool
    {
        return $this->model->where('id', $id)->update($data);
    }

    /**
     * Delete the specified model record from the database.
     *
     * @param $id
     *
     * @return bool|null
     * @throws Exception
     */
    public function delete($id): bool
    {
        return $this->getById($id)->delete();
    }
}
