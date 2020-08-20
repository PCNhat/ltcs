<?php

namespace App\Helpers\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * Get all the model records in the database
     * @return Model
     */
    public function all();

    /**
     * Create the model in database
     * @param array $data
     * @return Model
     */
    public function create(array $data);

    /**
     * Get One
     * @param $id
     * @return Model
     */
    public function getById($id);

    /**
     * Update
     * @param array $data
     * @param $id
     * @return bool
     */
    public function update(array $data, $id);

    /**
     * Delete
     * @param $id
     * @return boolean|null
     */
    public function delete($id);
}
