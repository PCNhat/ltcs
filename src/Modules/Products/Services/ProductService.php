<?php

namespace App\Modules\Products\Services;

use App\Modules\Products\Repositories\ProductDescriptionRepositoryInterface;
use App\Modules\Products\Repositories\ProductDetailRepositoryInterface;
use App\Modules\Products\Repositories\ProductRepositoryInterface;
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;

class ProductService implements ProductServiceInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var ProductDetailRepositoryInterface
     */
    protected $productDetailRepository;

    /**
     * @var ProductDescriptionRepositoryInterface
     */
    protected $productDescriptionRepository;

    public function __construct
    (
        ProductRepositoryInterface $productRepository,
        ProductDetailRepositoryInterface $productDetailRepository,
        ProductDescriptionRepositoryInterface $productDescriptionRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->productDetailRepository = $productDetailRepository;
        $this->productDescriptionRepository = $productDescriptionRepository;
    }

    /**
     * Find product detail by id
     *
     * @param int $id
     * @return Model
     */
    public function findProductDetailById(int $id): Model
    {
        return $this->productDetailRepository->getById($id);
    }


    /**
     * Update Product
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProduct(int $id, array $data): bool
    {
        return $this->productRepository->update($data, $id);
    }

    /**
     * Update Product Detail
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProductDetail(int $id, array $data): bool
    {
        return $this->productDetailRepository->update($data, $id);
    }

    /**
     * Update Products Description
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function updateProductDescription(int $id, array $data): bool
    {
        return $this->productDescriptionRepository->update($data, $id);
    }

    /**
     * Add Product
     *
     * @param array $data
     * @return Model
     */
    public function addProduct(array $data): Model
    {
        return $this->productRepository->create($data);
    }


    /**
     * Add Product Detail
     *
     * @param array $data
     * @return Model
     */
    public function addProductDetail(array $data): Model
    {
        return $this->productDetailRepository->create($data);
    }

    /**
     * Add Product Description
     *
     * @param array $data
     * @return Model
     */
    public function addProductDescription(array $data): Model
    {
        return $this->productDescriptionRepository->create($data);
    }

    /**
     * Delete Product
     *
     * @param int $id
     * @return bool
     */
    public function deleteProduct(int $id): bool
    {
        return $this->productRepository->delete($id);
    }

    /**
     * Delete Product Detail
     *
     * @param int $id
     * @return bool
     */
    public function deleteProductDetail(int $id): bool
    {
        return $this->productDetailRepository->delete($id);
    }

    /**
     * Delete Product Description
     *
     * @param int $id
     * @return bool
     */
    public function deleteProductDescription(int $id): bool
    {
        return $this->productDescriptionRepository->delete($id);
    }

    /**
     * Find product by Name and Category Id
     *
     * @param string $name
     * @param int $categoryId
     * @return object
     */
    public function findProductByNameAndCategory(string $name, int $categoryId)
    {
        $conditions = [
            ['name', $name],
            ['category_id', $categoryId],
        ];

        return $this->productRepository->findByConditions($conditions);
    }

    /**
     * Get list product and product detail
     *
     * @return Collection|Builder[]
     */
    public function listProductAndProductDetail()
    {
        return $this->productRepository->getListWithProductDetail();
    }

    /**
     * Find product and product detail
     *
     * @param int $id
     * @return Builder[]|Collection
     */
    public function findProductAndProductDetail(int $id)
    {
        return $this->productRepository->findWithProductDetail($id);
    }

    /**
     * Find product detail and product
     *
     * @param int $id
     * @return Builder[]|Collection
     */
    public function findProductDetailAndProduct(int $id)
    {
        return $this->productDetailRepository->findWithProduct($id);
    }

}
