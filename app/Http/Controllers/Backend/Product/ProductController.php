<?php

namespace App\Http\Controllers\Backend\Product;

use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryServiceInterface;
use App\Modules\Products\Services\ProductServiceInterface;
use App\Product;
use App\ProductDescription;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProductController extends Controller
{
    use FileHelperTrait;

    /**
     * @var ProductServiceInterface
     */
    protected $productService;

    /**
     * @var CategoryServiceInterface
     */
    protected $categoryService;

    /**
     * ProductController constructor.
     * @param ProductServiceInterface $productService
     * @param CategoryServiceInterface $categoryService
     */
    public function __construct
    (
        ProductServiceInterface $productService,
        CategoryServiceInterface $categoryService
    )
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $products = $this->productService->listProductAndProductDetail();
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = $this->categoryService->getListCategories();

        return view('backend.products.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $product = $request->only('category_id', 'name');
        if ($request->hasFile('avatar')) {
            $product['avatar'] = $this->uploadFile($request->file('avatar'), 'products');
        }

        $productDetail = $request->only(
            'cpu_brand', 'cpu_series', 'cpu_suffixes', 'cpu_cores', 'cpu_threads', 'cpu_cache', 'cpu_lithography', 'cpu_base_clock', 'cpu_boost_clock',
            'ram_amount', 'ram_type', 'ram_speed', 'ram_socket_number', 'ram_socket_existence_number', 'ram_max_amount_support',
            'display_size', 'display_aspect_ratio', 'display_resolution', 'display_panel_type', 'display_technology', 'display_is_touch_screen',
            'hard_drive_type', 'hard_drive_amount', 'hard_drive_socket_number', 'hard_drive_socket_existence_number', 'hard_drive_is_support_ssd', 'hard_drive_is_support_hdd',
            'price',
            'not_onboard_graphics_card', 'graphics_card',
            'ports',
            'wifi', 'bluetooth',
            'camera', 'microphone', 'speaker',
            'os',
            'dimension', 'weight',
            'battery');
        $productDescription = $request->only('description');
        $productExist = $this->productService->findProductByNameAndCategory($product['name'], $product['category_id']);
        if ($productExist === null) {
            $productExist = $this->productService->addProduct($product);
        }

        $productDetail['product_id'] = $productExist->id;
        $productDetail = $this->productService->addProductDetail($productDetail);
        $productDescription['product_detail_id'] = $productDetail->id;
        $productDescription = $this->productService->addProductDescription($productDescription);

        return redirect()->back()->with(['success' => 'Thêm sản phẩm thành công!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show(int $id): View
    {
        $product = $this->productService->findProductAndProductDetail($id);

        return view('backend.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id): View
    {
        $categories = $this->categoryService->getListCategories();
        $productDetail = $this->productService->findProductDetailAndProduct($id);

        return view('backend.products.update', compact('categories', 'productDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $product = $request->only('category_id', 'name');
        if ($request->hasFile('avatar')) {
            $product['avatar'] = $this->uploadFile($request->file('avatar'), 'products');
        }

        $productDetail = $request->only(
            'cpu_brand', 'cpu_series', 'cpu_suffixes', 'cpu_cores', 'cpu_threads', 'cpu_cache', 'cpu_lithography', 'cpu_base_clock', 'cpu_boost_clock',
            'ram_amount', 'ram_type', 'ram_speed', 'ram_socket_number', 'ram_socket_existence_number', 'ram_max_amount_support',
            'display_size', 'display_aspect_ratio', 'display_resolution', 'display_panel_type', 'display_technology', 'display_is_touch_screen',
            'hard_drive_type', 'hard_drive_amount', 'hard_drive_socket_number', 'hard_drive_socket_existence_number', 'hard_drive_is_support_ssd', 'hard_drive_is_support_hdd',
            'price',
            'not_onboard_graphics_card', 'graphics_card',
            'ports',
            'wifi', 'bluetooth',
            'camera', 'microphone', 'speaker',
            'os',
            'dimension', 'weight',
            'battery');
        $productDetailStored = $this->productService->findProductDetailById($id);

        if ($productDetailStored !== null) {
            $productDetail = $this->productService->updateProductDetail($id, $productDetail);
            $productDescription['product_detail_id'] = $productDetailStored->id;
            $product = $this->productService->updateProduct($productDetailStored->product_id, $product);
            $productDescription = $this->productService->addProductDescription($productDescription);

            return redirect()->route('admin.product.show', ['id' => $productDetailStored->product_id])->with(['success' => 'Sửa sản phẩm thành công!']);
        }

        return redirect()->back()->withErrors('Sửa sản phẩm thất bại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        if ($this->productService->deleteProduct($id)) {
            return redirect()->back()->with(['success' => 'Xóa sản phẩm thành công!']);
        }

        return redirect()->back()->withErrors('Xóa sản phẩm thất bại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function deleteProductDetail($id)
    {
        if ($this->productService->deleteProductDetail($id)) {
            return redirect()->back()->with(['success' => 'Xóa sản phẩm thành công!']);
        }

        return redirect()->back()->withErrors('Xóa sản phẩm thất bại!');
    }
}
