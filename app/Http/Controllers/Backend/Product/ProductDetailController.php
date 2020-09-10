<?php

namespace App\Http\Controllers\Backend\Product;

use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryServiceInterface;
use App\Modules\Products\Services\ProductServiceInterface;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
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

    public function create()
    {
        $product = $this->productService->findProductAndProductDetail(request()->id);

        return view('backend.product-details.add', compact('product'));
    }
    public function store(Request $request)
    {
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

        $productDetail['product_id'] = $request->id;
        $productDetail = $this->productService->addProductDetail($productDetail);
        $productDescription['product_detail_id'] = $productDetail->id;
        $productDescription = $this->productService->addProductDescription($productDescription);

        return redirect()->route('admin.product.show', request()->id)->with(['success' => 'Thêm phiên bản mới thành công!']);
    }
}
