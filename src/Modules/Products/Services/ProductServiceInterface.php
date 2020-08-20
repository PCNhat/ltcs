<?php

namespace App\Modules\Products\Services;

use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

interface ProductServiceInterface
{
    /**
     * Update Product
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProduct(int $id, array $data): bool;

    /**
     * Update Product Detail
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProductDetail(int $id, array $data): bool;

    /**
     * Update Products Description
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProductDescription(int $id, array $data): bool;

    /**
     * Add Product
     *
     * @param array $data
     * @return Model
     */
    public function addProduct(array $data): Model;

    /**
     * Add Product Detail
     *
     * @param array $data
     * @return Model
     */
    public function addProductDetail(array $data): Model;

    /**
     * Add Product Description
     *
     * @param array $data
     * @return Model
     */
    public function addProductDescription(array $data): Model;

    /**
     * Delete Product
     *
     * @param int $id
     * @return bool
     */
    public function deleteProduct(int $id): bool;

    /**
     * Delete Product Detail
     *
     * @param int $id
     * @return bool
     */
    public function deleteProductDetail(int $id): bool;

    /**
     * Delete Product Description
     *
     * @param int $id
     * @return bool
     */
    public function deleteProductDescription(int $id): bool;

    /**
     * Find product by Name and Category Id
     *
     * @param string $name
     * @param int $categoryId
     * @return object
     */
    public function findProductByNameAndCategory(string $name, int $categoryId);

    /**
     * Get list product and product detail
     *
     * @return Collection|Builder[]
     */
    public function listProductAndProductDetail();

    /**
     * Find product and product detail
     *
     * @param int $id
     * @return Builder[]|Collection
     */
    public function findProductAndProductDetail(int $id);
}
