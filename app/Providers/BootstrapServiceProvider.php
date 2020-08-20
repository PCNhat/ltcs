<?php

namespace App\Providers;

use App\Modules\Categories\Services\CategoryService;
use App\Modules\Categories\Services\CategoryServiceInterface;
use App\Modules\Products\Services\ProductService;
use App\Modules\Products\Services\ProductServiceInterface;
use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryServiceInterface::class, CategoryService::class);
        $this->app->bind(ProductServiceInterface::class, ProductService::class);
    }
}
