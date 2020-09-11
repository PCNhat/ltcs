<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Modules\Posts\Services\PostServiceInterface;
use App\Modules\Products\Services\ProductServiceInterface;
use App\Modules\Users\Services\UserServiceInterface;

class DashboardController extends Controller
{
    protected $userService;

    protected $postService;

    protected $productService;

    public function __construct(
        UserServiceInterface $userService,
        PostServiceInterface $postService,
        ProductServiceInterface $productService
    )
    {
        $this->userService = $userService;
        $this->postService = $postService;
        $this->productService = $productService;
    }

    public function index()
    {
        $countUser = $this->userService->countUser();
        $countPost = $this->postService->countPost();
        $countProduct = $this->productService->countProduct();
        $countPostAroundDay = $this->postService->countPostAroundDay();
        $countProductAroundDay = $this->productService->countProductAroundDay();

        return view('backend.dashboard.index', compact('countUser', 'countPost', 'countProduct', 'countPostAroundDay', 'countProductAroundDay'));
    }
}
